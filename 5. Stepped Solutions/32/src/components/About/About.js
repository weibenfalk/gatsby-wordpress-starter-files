import React from "react"
import { useAboutQuery } from "../../hooks/useAboutQuery"
import { Wrapper, AboutImage } from "./About.styles"

const About = () => {
  const data = useAboutQuery()
  const imageData = data.wpPage.featuredImage.node.localFile.publicURL

  return (
    <Wrapper>
      <AboutImage image={imageData} />
      <div className="about-text">
        <div dangerouslySetInnerHTML={{ __html: data.wpPage.content }} />
      </div>
    </Wrapper>
  )
}

export default About
