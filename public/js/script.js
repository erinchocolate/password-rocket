"use strict";
const resultElement = document.getElementById("result");
const lengthElement = document.getElementById("length");
const clipboardElement = document.getElementById("clipboard");
const lowercaseElement = document.getElementById("lowercase");
const uppercaseElement = document.getElementById("uppercase");
const numberElement = document.getElementById("number");
const symbolElement = document.getElementById("symbol");
const generateElement = document.getElementById("generate");
const saveElement = document.getElementById("save");
let length = 10;
let finalPassword;

const randomFunc = {
    lower: getRandomLower,
    upper: getRandomUpper,
    number: getRandomNumber,
    symbol: getRandomSymbol,
};

saveElement.addEventListener('click', () => {
    let token = document
           .querySelector('meta[name="csrf-token"]')
           .getAttribute("content");
    
    fetch("/records", {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: "post",
        credentials: "same-origin",
        body: JSON.stringify({
            password: finalPassword,
            description: "78987",
        }),
    }).catch(function (error) {
        console.log(error);
    });
})


generateElement.addEventListener("click", () => {
    const hasLower = lowercaseElement.checked;
    const hasUpper = uppercaseElement.checked;
    const hasNumber = numberElement.checked;
    const hasSymbol = symbolElement.checked;
    resultElement.innerText = generatePassword(
        hasLower,
        hasUpper,
        hasNumber,
        hasSymbol
    );
});

clipboardElement.addEventListener("click", () => {
    const password = resultElement.innerText;

    if (!password) return;
    navigator.clipboard.writeText(`${password}`);
    alert("Password copied to clipboard!");
});

function generatePassword(lower, upper, number, symbol) {
    let generatedPassword = "";
    const typesCount = lower + upper + number + symbol;
    const typesArr = [{ lower }, { upper }, { number }, { symbol }].filter(
        (item) => Object.values(item)[0]
    );

    if (typesCount == 0 || length == 0) {
        return "";
    }

    for (let i = 0; i < length; i += typesCount) {
        typesArr.forEach((type) => {
            const funcName = Object.keys(type)[0];
            generatedPassword += randomFunc[funcName]();
        });
    }

    finalPassword = generatedPassword.slice(0, length);
    return finalPassword;
}

function updateLength(val) {
    lengthElement.textContent = val;
    length = val;
}

function getRandomLower() {
    return String.fromCharCode(Math.floor(Math.random() * 26) + 97);
}

function getRandomUpper() {
    return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
}

function getRandomNumber() {
    return String.fromCharCode(Math.floor(Math.random() * 10) + 48);
}

function getRandomSymbol() {
    const symbols = '~!@#$%^&*()_+{}|:"<>?`-=[];,./';
    return symbols[Math.floor(Math.random() * symbols.length)];
}


