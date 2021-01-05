import React from "react"
import { Link } from "gatsby"
import { Wrapper } from "./BreadCrumb.styles"

const BreadCrumb = ({ parent }) => (
  <Wrapper>
    <Link to="/">
      <span>Home</span>
    </Link>
    <span className="divider">/</span>
    {parent ? (
      <>
        <Link to={parent.link}>
          <span dangerouslySetInnerHTML={{ __html: parent.title }} />
        </Link>
        <span className="divider">/</span>
      </>
    ) : null}
  </Wrapper>
)

export default BreadCrumb
