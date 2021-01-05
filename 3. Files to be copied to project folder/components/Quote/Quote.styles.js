import styled from 'styled-components';

export const Wrapper = styled.div`
  background: #4d4d4d;
  text-align: center;
  padding: 40px 0;
  color: #fff;

  img {
    display: block;
    max-width: 40px;
    margin: 20px auto 40px auto;
  }
`;

export const Content = styled.div`
  max-width: 1080px;
  margin: 0 auto;

  h6 {
    font-size: 1rem;
  }

  @media screen and (min-width: 768px) {
    h6 {
      font-size: 1.5rem;
    }
  }
`;
