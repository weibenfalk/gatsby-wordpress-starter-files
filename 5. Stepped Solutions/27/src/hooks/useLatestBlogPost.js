import { useStaticQuery, graphql } from "gatsby"

export const useLatestBlogPost = () => {
  const data = useStaticQuery(graphql`
    query MyQuery {
      allWpPost(sort: { fields: date, order: DESC }) {
        edges {
          node {
            title
            excerpt
            slug
          }
        }
      }
    }
  `)

  return data
}
