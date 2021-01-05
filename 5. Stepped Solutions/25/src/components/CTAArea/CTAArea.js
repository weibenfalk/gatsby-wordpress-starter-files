import React from "react"
import { useCTAAreaQuery } from "../../hooks/useCTAAreaQuery"
import { Wrapper } from "./CTAArea.styles"

const CTAArea = () => {
  const { cta } = useCTAAreaQuery()
  console.log(cta)

  return <Wrapper>CTA Area</Wrapper>
}

export default CTAArea
