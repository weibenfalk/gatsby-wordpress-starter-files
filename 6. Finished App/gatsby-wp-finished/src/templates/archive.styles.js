import styled from "styled-components"
import { Link } from "gatsby"

export const Wrapper = styled.div`
  max-width: 1180px;
  margin: 0 auto;
  padding: 20px;
`

export const ContentWrapper = styled.div`
  display: block;

  @media (min-width: 992px) {
    display: flex;
  }
`

export const PageContent = styled.article`
  margin: 20px 0 0 0;

  .dot-divider {
    width: 100%;
    height: 5px;
    margin-bottom: 20px;
    border-bottom: 1px solid lightgrey;
  }
`

export const StyledH2 = styled.h2`
  font-weight: 500;
  font-size: 1.8rem;
  :hover {
    color: #ee2562;
  }
`

export const StyledDate = styled.div`
  font-family: "Teko";
  font-size: 1.1rem;
  font-weight: 600;
`

export const StyledReadMore = styled(Link)`
  font-family: "Teko", Arial, Helvetica, sans-serif;
  font-size: 1rem;
  font-weight: 800;
  color: #fff;
  position: relative;
  width: 90px;
  height: 30px;
  display: block;
  background: #000;
  padding: 3px 0 0 10px;
  margin-bottom: 30px;

  :after {
    left: 100%;
    top: 50%;
    border: solid transparent;
    content: "";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-left-color: #000;
    border-width: 15px;
    margin-top: -15px;
  }

  :hover {
    background: #ee2562;
  }

  :hover:after {
    border-left-color: #ee2562;
  }
`
