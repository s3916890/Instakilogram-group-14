<?php

function fetchAllUsers(){
    fetch(../database/account.db {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json', 
        }, 
        .then((response) => {
            return response.json(); 
        })
        .then((data) => {
            callback(data); 
        }); 
    }
}

function filterData(data) {
    let result = []; 
    let searchValue=searchUserInput.value.toString().toLowerCase.);
    data.forEach((user) => {
        let email = user.email.toLowerCase0;
        let firstName = user.firstName.toLowerCase();
        let LastName = user.LastName. toLowerCase () ;
        Let name = firstName + " " + lastName; 
        if (
            email.includes(searchValue) ||
            firstName.includes(searchValue) ||
            lastName.includes(searchValue) ||
            name.includes(searchValue)
        ) {
            result.push(user); 
        }
    }
});

function renderUIUser(data) {
    userList.innerHTML = ''; 
    let id = data[i].id; 
    let email = data[i].email; 
    let firstName = data[i].firstName; 
    let lastName = data[i].lastName; 
    let html = '<li class="list-group-item" onclick ="window.location.href = ""
    <span class = "pe-1">
    Email: ${email} | Name: ${firstName + '' + lastName}
    </span>
    </li>'; 
    let para = document.createRange().createContextualFragment(html); 
    userList.appendChild(para);
}