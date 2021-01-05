import React from "react"
import { graphql } from "gatsby"
import styled from "styled-components"
// Components
import Layout from "../components/Layout/Layout"

const Wrapper = styled.div`
  max-width: 1180px;
  margin: 0 auto;
  padding: 20px;
`

const ContentWrapper = styled.div`
  display: block;

  @media (min-width: 992px) {
    display: flex;
  }
`

const PageContent = styled.article`
  margin-top: 20px;
`

const PageTemplate = () => (
  <Layout>
    <p>PageHero</p>
    <Wrapper>
      <p>Sidebar</p>
      <p>Content</p>
    </Wrapper>
  </Layout>
)

export default PageTemplate
