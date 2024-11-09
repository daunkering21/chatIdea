<div class="front-row">
  <div class="public-room">
    <div class="room-container">
      <div class="main">
        <span class="room-name">Test Public Room</span>
        <span class="room-description">This room is for our live demo, please be wise to chat on this room.</span>
      </div>
      <div class="toggle">
        <button class="join">Join chat</button>
      </div>
    </div>
    <div class="room-container">
      <div class="main">
        <span class="room-name">Create new room</span>
      </div>
      <div class="toggle">
        <button class="join">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bubble-plus">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12.4 19a4.2 4.2 0 0 1 -1.57 -.298l-3.83 2.298v-3.134a2.668 2.668 0 0 1 -1.795 -3.773a4.8 4.8 0 0 1 2.908 -8.933a5.335 5.335 0 0 1 9.194 1.078a5.333 5.333 0 0 1 4.45 6.89"/>
            <path d="M16 19h6"/>
            <path d="M19 16v6"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="public-chat">
    <div class="main">
      <span class="room-name">Test Public Room</span>
      <span class="room-exit">Exit Room</span>
      <div class="chatting">
        <form action="/message" method="post">
          <button type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-paperclip">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
            </svg>
          </button>
          <input type="text">
          <button type="submit">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
          </button>
        </form>
      </div>
      <div class="chat-container">
        <div class="row">
          <div class="chat-left">
            <span class="user">Irwan</span>
            <div class="content">
              <span class="messages">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem ex, quaerat, cupiditate praesentium repellat harum suscipit quis velit doloribus officiis veniam. Culpa assumenda, quaerat facilis suscipit iusto aspernatur fugit possimus.</span>
            </div>
            <span class="timestamp">18:30</span>
          </div>
        </div>
        <div class="row">
          <div class="chat-right">
            <span class="user">Charles</span>
            <div class="content">
              <span class="messages">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem ex, quaerat, cupiditate praesentium repellat harum suscipit quis velit doloribus officiis veniam. Culpa assumenda, quaerat facilis suscipit iusto aspernatur fugit possimus.</span>
            </div>
            <span class="timestamp">18:31</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>