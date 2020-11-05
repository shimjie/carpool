
<link href="assets/css/routine-search.css" rel="stylesheet">

<svg style="display:none;">
  <defs>
    <g id="search">
      <path fill="#90A4AE" d="M22.9,20.1h-1.5l-0.5-0.5c1.8-2.1,2.9-4.8,2.9-7.7C23.8,5.3,18.5,0,11.9,0S0,5.3,0,11.9s5.3,11.9,11.9,11.9
	    c3,0,5.7-1.1,7.7-2.9l0.5,0.5v1.4l9.1,9.1l2.7-2.7L22.9,20.1z M11.9,20.1c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2
	    S16.4,20.1,11.9,20.1z"/>
    </g>
  </defs>
</svg>

<nav class="nav__cont">
  <ul class="nav">
    <li class="nav__items">
      <svg viewBox="0 0 48 48" style = "margin-left: 30px">
        <use xlink:href="#search"></use>
      </svg>
      <a href="#" style = "margin-left: 80px">Search</a>

      <div class = "search-content invisible" style = "margin-left: 30px">

        <select class="custom-select" id="inputGroupSelect01">
                <option value="0">Start Point</option>
                <option value="1">Hobart & Southern Tasmania</option>
                <option value="2">North West Tasmania</option>
                <option value="3">The East Coast</option>
                <option value="4">Launceston and Northern Tasmania</option>
                <option value="5">Western Tasmania</option>
        </select>
        
        <br>
        <select class="custom-select" id="inputGroupSelect01">
                <option value="0">Destination</option>
                <option value="1">Hobart & Southern Tasmania</option>
                <option value="2">North West Tasmania</option>
                <option value="3">The East Coast</option>
                <option value="4">Launceston and Northern Tasmania</option>
                <option value="5">Western Tasmania</option>
        </select>
        
        <br>
        <select class="custom-select" id="inputGroupSelect01">
                <option value="0">Time</option>
                <option value="1">Hobart & Southern Tasmania</option>
                <option value="2">North West Tasmania</option>
                <option value="3">The East Coast</option>
                <option value="4">Launceston and Northern Tasmania</option>
                <option value="5">Western Tasmania</option>
        </select>
        
        <br>
        <select class="custom-select" id="inputGroupSelect01">
                <option value="0">Time</option>
                <option value="1">1:00</option>
                <option value="2">2:00</option>
        </select>
        <br>
        <div class="form-group">
            <button>Search</button>
        </div>
    </div>
        
        
      </div>
    </li>
  </ul>
</nav>

<script src="assets/js/routine-search.js"></script>