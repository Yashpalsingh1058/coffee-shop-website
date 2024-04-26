<style>
    /* Chat bar collapsible */
.chat-bar-collapsible-custom {
    position: fixed;
    bottom: 0;
    right: 50px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.chat-bar-collapsible-custom {
    bottom: 0;
    right: 0;
    /* width: 100%; */
    height: 64px;
    }

/* Chat button */
#chat-button-custom {
    background-color: #392414;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 350px;
    text-align: left;
    outline: none;
    font-size: 18px;
    border-radius: 10px 10px 0px 0px;
    border: 1px solid white;
    border-bottom: none;
}

/* Chat icon */
#chat-icon-custom {
    display: flex;
    justify-content: space-evenly;
    box-sizing: border-box;
    width: 50%;
    float: right;
    font-size: 20px;
}

/* Content area */
.content-custom {
    width: 350px;
    background: white;
    text-align: center;
    overflow: auto;
    scrollbar-width: none;
    height: max-content;
    transition: max-height 0.2s ease-out;
}

/* Full chat block */
.full-chat-block-custom {
    min-height: 500px;
    bottom: 0%;
    position: relative;
}

/* Outer container */
.outer-container-custom {
    min-height: 500px;
    bottom: 0%;
    position: relative;
}

/* Chat container */
.chat-container-custom {
    max-height: 500px;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    scroll-behavior: smooth;
    hyphens: auto;
}

.chat-container-custom::-webkit-scrollbar {
    display: none;
}


</style>
<div class="chat-bar-collapsible-custom" id="direct-chatboot-custom" onclick="window.location.href='users/login.php'" disabled>
    <button id="chat-button-custom" type="button" class="collapsible-custom">Chat with us! &nbsp;
        <i id="chat-icon-custom" style="color: #fff;" class="fas fa-comments"></i>
    </button>
    <div class="content-custom">
        <div class="full-chat-block-custom">
            <!-- Message Container -->
            <div class="outer-container-custom">
                <div class="chat-container-custom">
                    <!-- Messages -->
                    <div id="chatbox-custom">
                        <h5 id="chat-timestamp-custom"></h5>
                        <p id="botStarterMessage-custom" class="botText-custom"><span>Loading...</span></p>
                    </div>
                    <!-- User input box -->
                    <div class="chat-bar-input-block-custom">
                        <div id="userInput-custom">
                            <input id="textInput-custom" class="input-box-custom" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                            <p></p>
                        </div>
                        <div class="chat-bar-icons-custom">
                            <i id="send-icon-custom" style="color: #333;" class="fa fa-fw fa-paper-plane" onclick="sendButton()"></i>
                        </div>
                    </div>
                    <div id="chat-bar-bottom-custom">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
