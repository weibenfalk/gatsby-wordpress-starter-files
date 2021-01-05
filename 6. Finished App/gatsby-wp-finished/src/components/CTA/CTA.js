import React from "react"
import { Link } from "gatsby"
import {
  StyledImg,
  CTAImage,
  CTAImageTextWrapper,
  CTAImageText,
} from "./CTA.styles"

const CTA = ({ image, link, text }) => (
  <CTAImage>
    <StyledImg image={image} alt="CTA Image" />
    <Link to={link}>
      <CTAImageTextWrapper>
        <CTAImageText>{text}</CTAImageText>
      </CTAImageTextWrapper>
    </Link>
  </CTAImage>
)

export default CTA
