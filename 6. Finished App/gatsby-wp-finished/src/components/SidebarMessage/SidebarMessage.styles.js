import styled from 'styled-components';

export const Wrapper = styled.div`
  font-family: 'Teko', Arial, Helvetica, sans-serif;
  font-weight: 600;
  margin: 0 0 20px 0;

  p {
    font-weight: 400;
    font-size: 0.8rem;
    margin: 0;
    line-height: 1.2rem;
    margin-top: 10px;
  }

  div {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 2px #e4e4e4 solid;

    img {
      padding-right: 10px;
      margin-bottom: 3px;
      width: 30px;
      height: auto;
    }

    span {
      font-size: 1.2rem;
      font-weight: 600;
      text-transform: uppercase;
    }
  }
`;
