const path = require("path")

exports.createPages = async ({ graphql, actions }) => {
  const { createPage } = actions

  const archiveTemplate = path.resolve('./src/templates/archive.js')

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

  // Create pages for each category
  allWpCategory.edges.forEach(category => {
    const postsPerPage = 10
    const numberOfPosts = category.node.count
    const numPages = Math.ceil(numberOfPosts / postsPerPage)

    // Some categories may be empty and we don't want to create pages for them
    // Also don't want to create pages for uncategorized
    if (numberOfPosts > 0 || category.node.name !== "uncategorized") {
      Array.from({ length: numPages }).forEach((_, i) => {
        createPage({
          path:
            i === 0
              ? `/blog/${category.node.slug}`
              : `/blog/${category.node.slug}/${i + 1}`,
          component: archiveTemplate,
          context: {
            limit: postsPerPage,
            skip: i * postsPerPage,
            numPages,
            currentPage: i + 1,
            catId: category.node.id,
            catName: category.node.name,
            catSlug: category.node.slug,
            categories: allWpCategory
          }
        })
      })
    }
  })
}
