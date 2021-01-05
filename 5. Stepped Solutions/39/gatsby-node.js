const path = require("path")

exports.createPages = async ({ graphql, actions }) => {
  const { createPage } = actions

  const result = await graphql(`
    {
      allWpCategory {
        edges {
          node {
            id
            name
            slug
            count
          }
        }
      }
    }
  `)

  // Check for errors
  if (result.errors) throw new Error(result.error)

  const { allWpCategory } = result.data
}
