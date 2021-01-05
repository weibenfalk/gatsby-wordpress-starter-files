import { useStaticQuery, graphql } from "gatsby"

export const useHeroQuery = () => {
  const data = useStaticQuery(graphql`
    query HeroQuery {
      wpPage(databaseId: { eq: 47 }) {
        id
        ACF_HomePage {
          heroText
          heroImage {
            localFile {
              childImageSharp {
                gatsbyImageData(
                  maxWidth: 1920
                  layout: FLUID
                  placeholder: TRACED_SVG
                )
              }
            }
          }
        }
      }
    }
  `)

  return data
}
