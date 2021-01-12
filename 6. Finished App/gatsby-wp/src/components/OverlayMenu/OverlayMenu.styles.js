import styled from 'styled-components';

export const Overlay = styled.div`
  width: 100%;
  height: 100%;
  position: fixed;
  opacity: ${props => (props.menuOpen ? '1' : '0')};
  transform: ${props =>
    props.menuOpen ? 'translateX(0%)' : 'translateX(-100%)'};
  z-index: 100000;
  background: #fff;
  left: 0px;
  padding: 20px;
  transition: all 0.3s ease;

  .inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #000;
    width: 100%;
    height: 100%;
    color: #fff;
    padding: 40px;

    .invertedLogo {
      max-width: 200px;
      margin: 0 0 60px 0;
    }

    .overlayMenu {
      text-align: center;
      list-style-type: none;
      margin: 0;

      li {
        margin: 0 0 20px 0;
      }

      li.overlayActive {
        color: #ee2562;
      }

      a {
        font-family: 'Teko', Arial, Helvetica, sans-serif;
        font-size: 2rem;
        color: #fff;
        transition: all 0.3s ease;
        text-decoration: none;

        :hover {
          color: #ee2562;
        }
      }
    }
  }

  .closeButton {
    position: absolute;
    top: 50px;
    right: 50px;
    color: #fff;
    width: 30px;
    height: 30px;
    cursor: pointer;
    transition: all 1s ease;
    outline: none;

    :hover {
      transform: rotate(180deg);
    }
  }
`;
