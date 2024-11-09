<div class="front-nav sour-gummy-bold">
  <a class="logo" href="/">
    <img src="{{ asset('assets/img/ChatIdea-2.png') }}" alt="logo" width="40px">
    <div class="logo-text">
      <span class="primary-color">Chat</span>
      <span class="secondary-color">Idea</span>
    </div>
  </a>
  <div class="mobile-nav">
    <button class="burger-menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M4 6l16 0" />
        <path d="M4 12l16 0"/>
        <path d="M4 18l16 0"/>
      </svg>
    </button>
  </div>
  <div class="nav-group">
    <a href="javascript:void(0)" class="sour-gummy-light" onclick="loadContent('index')">Home</a>
    <a href="javascript:void(0)" class="sour-gummy-semibold" onclick="loadContent('chatroom')">Chatroom</a>
    <a href="javascript:void(0)" class="sour-gummy-light" onclick="loadContent('contacts')">Contacts</a>
    <a href="javascript:void(0)" class="sour-gummy-light" onclick="loadContent('feedback')">Feedback</a>
  </div>
  <div class="nav-user">
    <button class="login" onclick="loginPage()">Login</button>
    <button class="register" onclick="registerPage()">Register</button>
  </div>
</div>