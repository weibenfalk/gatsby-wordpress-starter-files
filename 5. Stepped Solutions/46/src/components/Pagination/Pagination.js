import React from "react"
import { Link } from "gatsby"
import { Wrapper } from "./Pagination.styles"

const Pagination = ({ catSlug, page, totalPages }) => (
  <>
    <h2>
      Navigation - page {page} / {totalPages}
    </h2>
    <Wrapper>
      {page > 1 ? (
        <Link
          to={`/blog/${catSlug}/${page === 2 ? "" : page - 1}`}
          className="navBack"
        >
          Previous
        </Link>
      ) : (
        <div />
      )}
      {page < totalPages ? (
        <Link to={`/blog/${catSlug}/${page + 1}/`} className="navForward">
          Next
        </Link>
      ) : (
        <div />
      )}
    </Wrapper>
  </>
)

export default Pagination
