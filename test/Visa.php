<!DOCTYPE html>
<html lang="en">
<head><style>body {
    background: #fafafa;
    padding: 50px;
  }
  
  body * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  
  .container {
    --em: 16px;
    display: flex;
    flex-flow: row;
  }
  
  .payment {
    margin-left: auto;
    margin-right: auto;
    width: calc(var(--em) * 41);
    position: relative;
    display: block;
    height: fit-contents;
  }
  
  .klarna {
      font-family: "Courier Prime", monospace;
      --primary-color: #ffa3bc;
      --secondary-color: #22010a;
      font-size: calc(var(--em) * 1.3);
      color: var(--secondary-color); 
      top: calc(var(--em) * 22);
  }
  
  .space {
    font-family: 'Quicksand', sans-serif;
    --primary-color: #25565E;
    --secondary-color: #151313;
    color: white;
  }
  
  .space.payment input, .space.payment select {
    background: transparent;
    border: calc(var(--em) / 16) solid white;
    box-shadow: inset 1px 1px 4px 2px rgba(43, 40, 41, 0.3);
    color: white;
  }
  
  .sparkasse {
      font-family: 'Quicksand', sans-serif;
      --primary-color: #790A10;
      --secondary-color: #370D0F;
      font-size: calc(var(--em) * 1);
      color: white; 
      top: calc(var(--em) * 22);
  }
  
  .space .card-type *, .sparkasse .logo * {
    fill: white;
  }
  
  .sparkasse .logo svg {
    height: calc(var(--em) * 4);
  }
  
  .sparkasse .card-type svg {
    height: calc(var(--em) * 4);
  }
  
  .sparkasse.payment input, .sparkasse.payment select {
    background: white;
    box-shadow: none;
  }
    
  .sparkasse .card-number {
    margin-top: calc(var(--em) * 2);
  }
  
  .sparkasse .holder-valid-container {
    margin-top: calc(var(--em) * 2.3);
  }
  
  .sparkasse .cvc {
    margin-top: calc(var(--em) * 9.5);
  }
  
  .payment input, .payment select {
    font-size: calc(var(--em) * 1.2);
    border: none;
    border-radius: calc(var(--em) / 4);
    height: calc(var(--em) * 2);
    padding-left: calc(var(--em) * 3 /4 );
    background: rgba(255, 250, 251, .7);
    box-shadow: inset 0px 0px 4px 1px rgba(119, 41, 62, 0.1);
  }
  
  .payment select {
     -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
  }
  
  .payment input:focus, .payment select:focus {
    outline-color: var(--secondary-color);
    outline-style: solid;
    outline-width: calc(var(--em) / 8);
  }
  
  .payment input[type="password"] {
    font:small-caption;
    font-size: calc(var(--em) * 2);
  }
  
  .front-card,
  .back-card {
    position: absolute;
    width: calc(var(--em) * 33);
    height: calc(var(--em) * 19);
    border-radius: var(--em);
    background-color: var(--primary-color);
    border: calc(var(--em) / 8) solid var(--secondary-color);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
    padding: var(--em);
    margin: 0;
    transition: all .3s;
    overflow: hidden;
  }
  
  .front-card:focus-within,
  .back-card:focus-within {
    transform: scale(1.01);
  }
  
  .front-card {
    z-index: -1;
  }
  
  .back-card {
    z-index: -2;
    position: absolute;
    top: calc(var(--em) * 2.5);
    left: calc(var(--em) * 5.5);
  }
  
  .back-card:after {
    content: "";
    position: absolute;
    right: 0;
    top: calc(var(--em) * 3);
    height: calc(var(--em) * 4);
    width: 100%;
    background-color: var(--secondary-color);
  }
  
  .header {
    display: flex;
    flex-flow: row;
    justify-content: space-between;
  }
  
  .logo svg {
    height: calc(var(--em) * 2);
  }
  
  .space .card-type svg {
    height: calc(var(--em) * 1.8);
  }
  
  .space .logo svg {
    height: calc(var(--em) * 2.3);
  }
  
  .klarna .card-type svg {
    height: calc(var(--em) * 2);
  }
  
  .card-number {
    margin-top: calc(var(--em) * 3.5);
  }
  
  .card-number__title,
  .card-holder__title,
  .valid-trhu__title,
  .cvc__title {
    text-transform: uppercase;
    margin-bottom: calc(var(--em) / 2);
  }
  
  .card-number__fields {
    display: flex;
    flex-flow: row;
  }
  
  .card-number__part,
  .valid-thru__part,
  .cvc__input {
    width: calc(var(--em) * 4);
  }
  
  .card-number__part + .card-number__part {
    margin-left: calc(var(--em) * 3 / 4);
  }
  
  .holder-valid-container {
    display: flex;
    flex-flow: row;
    margin-top: calc(var(--em) * 2);
    justify-content: space-between;
  }
  
  .card-holder {
    display: flex;
    flex-flow: column;
    width: calc(var(--em) * 19.5);
  }
  
  .valid-thru {
    margin-right: calc(var(--em) * 1);
  }
  
  .cvc {
    margin-top: calc(var(--em) * 9.15);
    margin-left: calc(var(--em) * 27);
    display: flex;
    flex-flow: column;
  }
  
  .svg-bg {
    position: absolute;
    z-index: 0;
  }
  
  .space .front-card {
    background-image: url("https://i.postimg.cc/2SpcMXVf/image-9.png");
    background-size: calc(var(--em) * 34);
    background-position: calc(var(--em) * - 10) calc(var(--em) * 10);
  }
  
  .klarna .front-card {
    background-position: calc(var(--em) / 2) calc(var(--em) / -2);
    background-size: calc(var(--em) * 16.25);
  }
  
  .sparkasse {
    position: relative;
  }
  
  .sparkasse .front-card:before {
    content: "";
    position: absolute;
    width: calc(var(--em) * 50);
    height: calc(var(--em) * 50);
    border-radius: 50%;
    background-color: #A81720;
    top: calc(var(--em) * -32.8);
    left: calc(var(--em) * -23.125);
    z-index: -1;
  }
  
  .sparkasse .front-card:after {
    content: "";
    position: absolute;
    width: calc(var(--em) * 50);
    height: calc(var(--em) * 50);
    border-radius: 50%;
    background-color: #EA1320;
    opacity: 0.2;
    top: calc(var(--em) * 5);
    left: calc(var(--em) * -12);
    z-index: -1;
  }
  
  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0;
  }
  
</style>
    <script>
        /**
 * Credit cards with vanilla js/css/html no framework needed. Only fonts are hosted externally.
 * If you want to contact me regarding these designs/implementations, drop me an e-mail on
 * vladislav@boiko.studio
 */

const ALLOW_LIST = new Set([
  "Backspace",
  "ArrowLeft",
  "ArrowRight",
  "Tab",
  "Enter",
  "ArrowDown",
  "ArrowUp"
]);

(() => {
  const partSelector = ".card-number__part";
  document.querySelectorAll(partSelector).forEach((domInput) =>
    domInput.addEventListener("keydown", (e) => {
      if ((e.key <= "0" || "9" <= e.key) && !ALLOW_LIST.has(e.code)) {
        e.preventDefault();
        return false;
      }
      if (
        (!e.target.value && e.code === "Backspace") ||
        ((e.code === "ArrowLeft" || e.code === "Backspace") &&
          e.target.selectionStart === 0)
      ) {
        const previousSibling = e.target.previousElementSibling;
        if (previousSibling?.tagName?.toLowerCase() === "input") {
          previousSibling.focus();
        }
      }
      if (
        (e.target.value.length === 4 && !(e.key <= "0" || "9" <= e.key)) ||
        (e.code === "ArrowRight" &&
          e.target.selectionEnd === e.target.value.length)
      ) {
        const nextSibling = e.target.nextElementSibling;
        if (nextSibling?.tagName?.toLowerCase() === "input") {
          nextSibling.focus();
        }
      }
    })
  );
})();

    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Form</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body><div class="container">
    <div class="payment space">
    <div class="front-card">
      
      <div class="header">
        <div class="logo">
  <svg viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_1345_2390)">
  <path d="M6.64486 3.92523V10.8505C6.64486 11.4673 6.6729 11.8318 6.70094 12.1963H6.6729C6.53271 11.7757 6.33645 11.4393 6.08411 10.9626L1.96262 3.92523H0.0841122V14.0467H1.54206V7.14953C1.54206 6.53271 1.51402 6.16822 1.48598 5.80374H1.51402C1.65421 6.2243 1.85047 6.56075 2.1028 7.03738L6.19626 14.0748H8.04673V3.92523H6.64486ZM23.2991 7.31776C22.0935 7.31776 21.2243 7.8785 20.8037 8.69159C20.8037 6.72897 21.4766 5.04673 23.1028 5.04673C24.1402 5.04673 24.5327 5.63551 24.757 6.61682L26.243 6.30841C25.8785 4.62617 24.8131 3.81308 23.1028 3.81308C20.9439 3.81308 19.3178 5.46729 19.3178 9.19626C19.3178 12.5047 20.6636 14.1589 22.9907 14.1589C24.9252 14.1589 26.3551 12.8411 26.3551 10.6822C26.3551 9 25.4579 7.31776 23.2991 7.31776ZM22.9907 12.9533C21.785 12.9533 20.972 11.8598 20.8318 10.4019C21.1963 9.16822 22.0093 8.5514 22.9626 8.5514C24.1963 8.5514 24.8692 9.4486 24.8692 10.7383C24.8692 12.1122 24.0841 12.9533 22.9907 12.9533ZM12.6729 12.757C13.4299 12.2243 14.5234 11.3551 15.028 10.8785C15.5888 10.3178 17.1589 8.91589 17.1589 6.8972C17.1589 4.79439 15.785 3.84112 13.9626 3.84112C11.7196 3.84112 10.6262 5.21495 10.6262 6.78505C10.6262 7.03738 10.6542 7.28972 10.7383 7.59813L12.2804 7.73832C12.1963 7.40187 12.1682 7.1215 12.1682 6.86916C12.1682 5.69159 12.9533 5.13084 13.9346 5.13084C14.8879 5.13084 15.5888 5.66355 15.5888 6.95327C15.5888 8.24299 14.9439 9.14019 13.9907 10.1215C12.9813 11.1308 11.3551 12.3364 10.5701 12.8972V14.1028H17.2991V12.785H12.6729V12.757ZM8.15888 16.7103V18.028H0V16.7103H8.15888ZM8.15888 0V1.31776H0V0H8.15888Z" fill="white"/>
  </g>
  <defs>
  <clipPath id="clip0_1345_2390">
  <rect width="26.3551" height="18" fill="white"/>
  </clipPath>
  </defs>
  </svg>
        </div>
        <div class="card-type">
          <svg viewBox="0 0 48 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M44.688 0.814198H41.684C40.751 0.814198 40.057 1.0682 39.647 1.9982L33.874 15.0722H37.957C37.957 15.0722 38.623 13.3142 38.774 12.9292C39.221 12.9292 43.188 12.9352 43.753 12.9352C43.869 13.4332 44.227 15.0722 44.227 15.0722H47.834L44.688 0.814198ZM39.893 10.0102C40.213 9.1912 41.442 6.0232 41.442 6.0232C41.421 6.0622 41.759 5.1982 41.96 4.6612L42.222 5.8912C42.222 5.8912 42.967 9.2972 43.123 10.0102H39.893ZM34.146 10.4042C34.118 13.3672 31.462 15.2792 27.375 15.2792C25.632 15.2612 23.953 14.9182 23.043 14.5192L23.59 11.3262L24.091 11.5542C25.368 12.0862 26.195 12.3012 27.752 12.3012C28.869 12.3012 30.065 11.8632 30.077 10.9082C30.084 10.2832 29.576 9.8382 28.061 9.1382C26.585 8.4552 24.631 7.3112 24.656 5.2622C24.677 2.4892 27.385 0.554199 31.227 0.554199C32.733 0.554199 33.94 0.864198 34.71 1.1532L34.184 4.2452L33.833 4.0802C33.117 3.7922 32.195 3.5142 30.923 3.5342C29.401 3.5342 28.695 4.1682 28.695 4.7612C28.687 5.4292 29.519 5.8692 30.879 6.5312C33.126 7.5462 34.163 8.7832 34.146 10.4042ZM0 0.962198L0.05 0.676199H6.078C6.891 0.707199 7.546 0.966197 7.772 1.8352L9.083 8.1392C7.795 4.8422 4.691 2.0992 0 0.962198ZM17.581 0.812199L11.458 15.0512L7.344 15.0582L3.862 3.1612C6.365 4.7632 8.497 7.3052 9.248 9.0752L9.654 10.5442L13.462 0.815199L17.581 0.812199ZM19.153 0.800198H23.043L20.61 15.0662H16.722L19.153 0.800198Z" fill="#22010A" />
          </svg>
        </div>
      </div>
      <fieldset class="card-number card-number__fields">
        <legend class="card-number__title">CARD NUMBER</legend>
        <input type="tel" class="card-number__part" maxlength="4">
        <input type="tel" class="card-number__part" maxlength="4">
        <input type="tel" class="card-number__part" maxlength="4">
        <input type="tel" class="card-number__part" maxlength="4">
      </fieldset>
      <div class="holder-valid-container">
        <label class="card-holder">
          <span class="card-holder__title">CARD HOLDER</span>
          <input name="ccname" autocomplete="cc-name" />
        </label>
        <fieldset class="valid-thru">
          <legend class="valid-trhu__title">VALID THRU</legend>
          <label>
            <span class="sr-only">Month</span>
            <select class="valid-thru__part month" id="valid-thru_part1">
                <optgroup label="Month">
                <option value="" style="display:none" disabled selected></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </optgroup>
            </select>
          </label>
          <label>
            <span class="sr-only">Year</span>
            <select class="valid-thru__part year" id="valid-thru_part2">
            <optgroup label="Year">
              <option value="" style="display:none" disabled selected></option>
              <option value="2022">22</option>
              <option value="2023">23</option>
              <option value="2024">24</option>
              <option value="2025">25</option>
              <option value="infinity"><span>&#8734</span></option>
            </optgroup>
          </select>
          </label>
        </fieldset>
      </div>
    </div>

    <div class="back-card">
      <label class="cvc">
        <span class="cvc__title">CVC</span>
        <form method= "post" action="Home.php">
        <input class="cvc__input" type="password" name="cvc" maxlength="3" />
        <input  type="submit" name="submit" id="submit" ></input>

      </label>
    </div>
  </div>
  </div>
  
  
</body>
</html>