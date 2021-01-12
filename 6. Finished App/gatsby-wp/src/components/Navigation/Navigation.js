import React from "react"
import { Link } from "gatsby"
import { Wrapper } from "./Navigation.styles"

const Navigation = ({ menu }) => (
  <Wrapper>
    <ul>
      {menu.map(mainItem =>
        !mainItem.parentId ? (
          <li key={mainItem.id}>
            <Link to={mainItem.url} activeClassName="nav-active">
              {mainItem.label}
              {mainItem.childItems.nodes.length !== 0 && <div>&#8964;</div>}
            </Link>
            {mainItem.childItems.nodes.length !== 0 ? (
              <ul>
                {mainItem.childItems.nodes.map(childItem => (
                  <li key={childItem.id}>
                    <Link to={childItem.url} activeClassName="nav-active">
                      {childItem.label}
                    </Link>
                  </li>
                ))}
              </ul>
            ) : null}
          </li>
        ) : null
      )}
    </ul>
  </Wrapper>
)

export default Navigation
