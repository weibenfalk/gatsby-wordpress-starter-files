import { useStaticQuery, graphql } from "gatsby"

export const useAboutQuery = () => {
  const data = useStaticQuery(graphql`
    query AboutQuery {
      wpPage(databaseId: { eq: 47 }) {
        content
        featuredImage {
          node {
            localFile {
              childImageSharp {
                fluid(quality: 100) {
                  srcWebp
                }
              }
            }
          }
        }
      }
    }
  `)

  return data
}
