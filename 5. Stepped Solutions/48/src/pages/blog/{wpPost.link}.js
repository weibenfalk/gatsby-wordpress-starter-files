import React from "react"
import { graphql } from "gatsby"
import styled from "styled-components"

import Layout from "../../components/Layout/Layout"
import BreadCrumb from "../../components/BreadCrumb/BreadCrumb"

const Wrapper = styled.div`
  max-width: 1180px;
  margin: 0 auto;
  padding: 20px;
`

const ContentWrapper = styled.div`
  display: block;

  @media (min-width: 992px) {
    display: flex;
  }
`
const PostContent = styled.article`
  margin-top: 20px;
`

const PostTemplate = ({ data }) => (
  <Layout>
    <Wrapper>
      <BreadCrumb
        parent={{
          link: '/blog/all-posts',
          title: 'blog'
        }}
      />
      <ContentWrapper>
        Sidebar goes here
        <PostContent>
          <h1>Header</h1>
          <div>Content</div>
        </PostContent>
      </ContentWrapper>
    </Wrapper>
  </Layout>
)

export default PostTemplate
