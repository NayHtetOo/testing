import Echo from 'laravel-echo';
import './bootstrap';
import axios from 'axios';

// console.log("Value of input-message:");
// alert('hello');
const form = document.getElementById('form');
const inputMessage = document.getElementById('input-message');
const listMessage = document.getElementById('list-messages');

inputMessage.value = "helloasfaskdjfaskldf";
// Log a message to the console

form.addEventListener('submit',function(event){
    const userInput = inputMessage.value;
    axios.post('/chat-message',{
        message: userInput
    });
});

const channel = Echo.channel('public.chat.1');

channel.subscribed(()=>{
    console.log('subscribed!');
}).listen('chat-message',(event)=>{
    console.log(event);
    const message = event.message;

    const li = document.createElement('li');
    li.textContent = message;
    listMessage.append(li);
});
