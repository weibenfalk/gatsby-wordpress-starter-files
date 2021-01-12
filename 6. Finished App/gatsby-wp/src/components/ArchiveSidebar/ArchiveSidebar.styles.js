import styled from 'styled-components';

export const Wrapper = styled.aside`
  margin: 40px 0 0 0;
  min-width:25%;

  @media (min-width: 992px) {
    margin: 125px 15px 0 0;
  }
`;

export const Menu = styled.ul`
  list-style-type: none;
  padding: 0 20px 0 0;
  margin: 0;

  .count {
    margin: 0 10px 0 0;
    padding: 0;
    font-size: 0.8rem;
    background: #aaa;
    color: #fff;
    border-radius: 20px;
    width: 30px;
    height: 21px;
    display: block;
    text-align: center;
    float: left;
  }

  .sidebar-menu-header {
    font-family: 'Teko', Arial, Helvetica, sans-serif;
    border-bottom: 2px #e4e4e4 solid;
    font-weight: 600;
    letter-spacing: 1px;
    margin: 0 0 20px 0;
    padding: 0 0 5px 0;
    text-transform: uppercase;
  }

  li {
    margin: 0 0 5px 0px;
    color: #000;
    font-family: 'Teko', Arial;
    font-size: 20px;
    font-weight: 400;
    letter-spacing: 1px;

    a:hover {
      color: #ee2562;
    }
  }

  .sidebar-highlighted {
    color: #ee2562;
  }

  p {
    font-size: 0.85rem;
    line-height: 1.2rem;
    letter-spacing: 0.5px;

    a {
      font-weight: 800;
    }
  }

  img {
    float: left;
    padding: 0 10px 0 0;
    width: 38px;
    height: auto;
  }
`;
