import styled from "styled-components"

export const Wrapper = styled.nav`
  display: flex;
  justify-content: space-between;
  flex-direction: ${props => (props.isFirst ? "row-reverse" : "row")};
  font-family: "Teko", Arial, Helvetica, sans-serif;
  font-size: 1rem;
  font-weight: 800;

  .back {
    color: #fff;
    position: relative;
    width: 120px;
    height: 30px;
    display: block;
    background: #000;
    padding: 3px 10px 0 25px;
    margin-bottom: 30px;
    text-align: center;

    :before {
      display: block;
      position: absolute;
      left: -15px;
      top: 50%;
      margin: 0;
      border: solid;
      content: "";
      pointer-events: none;
      border-right-color: #000;
      border-width: 15px;
      margin-top: -15px;
    }

    :hover {
      background: #ee2562;
    }

    :hover:before {
      border-right-color: #ee2562;
    }
  }

  .forward {
    color: #fff;
    position: relative;
    width: 120px;
    height: 30px;
    display: block;
    background: #000;
    padding: 3px 10px 0 5px;
    margin-bottom: 30px;
    text-align: center;

    :after {
      display: block;
      position: absolute;
      left: 90%;
      top: 50%;
      margin: 0;
      border: solid;
      content: "";
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
  }
`
