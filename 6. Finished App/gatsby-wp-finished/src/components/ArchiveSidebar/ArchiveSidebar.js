import React from "react"
import { Link } from "gatsby"
import PageIcon from "../../images/page-icon.svg"
import { Wrapper, Menu } from "./ArchiveSidebar.styles"

const ArchiveSidebar = ({ catId, categories }) => {
  const sortedCategories = [...categories].sort((x, y) => {
    if (x.node.slug === "all-posts") return -1
    if (y.node.slug === "all-posts") return 1
    return 0
  })

  return (
    <Wrapper>
      <Menu>
        <li className="sidebar-menu-header">
          <img src={PageIcon} alt="Cake It! - Archive Header" />
          <span>Posts</span>
        </li>

        {sortedCategories.map(cat => {
          if (cat.node.count !== 0) {
            return cat.node.slug !== 'uncategorized' ? (
              <li key={cat.node.id}>
                <span className="count">{cat.node.count}</span>
                <Link
                  to={`/blog/${cat.node.slug}/`}
                  activeClassName="sidebar-highlighted"
                >
                 <span dangerouslySetInnerHTML={{ __html: cat.node.name }} />   
                </Link>
              </li>
            ) : null
          }
          return null;
        })}
      </Menu>
    </Wrapper>
  )
}

export default ArchiveSidebar
