import React from "react"
import { Link, graphql } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import Layout from "../components/Layout/Layout"
import BreadCrumb from "../components/BreadCrumb/BreadCrumb"
import ArchiveSidebar from "../components/ArchiveSidebar/ArchiveSidebar"
import Pagination from "../components/Pagination/Pagination"

import {
  Wrapper,
  ContentWrapper,
  PageContent,
  StyledH2,
  StyledDate,
  StyledReadMore,
} from "./archive.styles"

const archiveTemplate = ({
  data: { allWpPost },
  pageContext: { catId, catName, catSlug, categories, numPages, currentPage },
}) => (
  <Layout>
    <StaticImage
      src="../images/archive_headerimage.png"
      placeholder="TRACED_SVG"
      layout="fluid"
      maxWidth={1920}
      maxHeight={300}
      alt="Archive Hero"
    />
    <Wrapper>
      <BreadCrumb
        parent={{
          link: "/blog/all-posts/",
          title: "blog",
        }}
      />
      <ContentWrapper>
        <ArchiveSidebar catId={catId} categories={categories.edges} />
        <PageContent>
          <h1 dangerouslySetInnerHTML={{ __html: catName }} />
          {allWpPost.edges.map(post => (
            <article key={post.node.id} className="entry-content">
              <Link to={`/blog/${post.node.slug}/`}>
                <StyledH2
                  dangerouslySetInnerHTML={{ __html: post.node.title }}
                />
              </Link>
              <StyledDate
                dangerouslySetInnerHTML={{ __html: post.node.date }}
              />
              <p dangerouslySetInnerHTML={{ __html: post.node.excerpt }} />
              <StyledReadMore to={`/blog/${post.node.slug}/`}>
                Read More
              </StyledReadMore>
              <div className="dot-divider" />
            </article>
          ))}
          <Pagination
            catSlug={catSlug}
            page={currentPage}
            totalPages={numPages}
          />
        </PageContent>
      </ContentWrapper>
    </Wrapper>
  </Layout>
)

export default archiveTemplate

export const pageQuery = graphql`
  query($catId: String!, $skip: Int!, $limit: Int!) {
    allWpPost(
      filter: { categories: { nodes: { elemMatch: { id: { eq: $catId } } } } }
      skip: $skip
      limit: $limit
    ) {
      edges {
        node {
          id
          title
          excerpt
          slug
          date(formatString: "DD MM YYYY")
        }
      }
    }
  }
`
