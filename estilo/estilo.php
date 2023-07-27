<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'arial', sans-serif;
    }
    body {
        background-color: #CFEBFC;
        height: 100%;
    }
    .container {
        height: auto;
        width: 75%;
        background-color: white;
        margin-left: 11%;
        margin-top: 1%;
        margin-bottom: 1%;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 50);
    }
    header {
        background-color: #9FD7F9;
        height: 75px;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    ul {
        display: flex;
        list-style: none;
    }
    a {
        text-decoration: none;
        background-color: #CFEBFC;
        padding: 5px;
        color: black;
        border-radius: 5px;
        height: 20px
    }
    a:hover {
        background-color: #6EC2F7;
        transition: 1.5s;
    }
    .centro {
        background-color: #CFEBFC;
        margin-top: 2.5%;
        margin-left: 13.5%;
        border-radius: 5px;
        padding: 20px;
        width: 70%;
        display: flex;
        justify-content: center;
    }
    .consulta {
        background-color: #CFEBFC;
        border-radius: 5px;
        margin-top: 5%;
        margin-bottom: 2.5%;
        padding: 20px;
        display: flex;
        justify-content: center;
    }
    #cod, #editora, #autor, #titulo, #ano {
        border-radius: 5px;
        border: solid 1px black;
        padding: 2.5px;
        margin: 5px;
    }
    .botao{
        border: 0;
        padding: 4px;
        background-color: #9FD7F9;
        cursor: pointer;
        border-radius: 5px;
    }
    .botao:hover {
        background-color: #6EC2F7;
        transition: 1s;
    }
    table {
        background-color: #CFEBFC;
        border-collapse: collapse;
        min-height: 150px;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
    tr {
        background-color: white;
    }
    tr:hover {
        background-color: #9FD7F9;
        transition: 0.4s;
    }
    th {
        border: 1px solid black;
        background-color: #6EC2F7;
        padding: 5px;
    }
    .front {
        background-color: #CFEBFC; 
        margin: 0 23%;
        border-radius: 5px;
        padding: 20px;
        width: 50%;
        display: flex;
        justify-content: center;
    }
    h2 {
        margin-top: 1.5%;
        width: 300px;
        word-wrap: break-word;
        white-space: normal;
    }
    #sem-livro {
        margin-top: 5%;
        margin-left: 5%;
        word-wrap: break-word;
        white-space: normal;
    }
    footer {
        bottom: 0;
        position: absolute;
        width: 100%;
        height: 81px;
        background-color: #9FD7F9;
        display: flex;
        justify-content: center;
    }
    p {
        color: black;
        margin-top: 2%;
    }
    #voltar {
        margin-left: 90%;
        margin-top: 5%;
        text-decoration: none;
        background-color: #CFEBFC;
        padding: 5px;
        color: black;
        border-radius: 5px;
        height: 20px
    }
    #voltar:hover {
        background-color: #6EC2F7;
        transition: 1.5s;
    }
    #botao{
        border: 0;
        padding: 5px;
        background-color: #CFEBFC;
        color: black;
        height: 30px;
        cursor: pointer;
        border-radius: 5px;
        padding: 2.5px;
        margin-left: 5px;
    }
    #botao:hover {
        background-color: #6EC2F7;
        transition: 1.5s;
    }
    header form {
        margin-top: 1.5%;
        display: flex;
        justify-content: space-around;
    }
    #text {
        background-color: #CFEBFC; 
        margin: 1% 0.5%;
        border-radius: 5px;
        padding: 20px;
        width: 95%;
        display: flex;
        justify-content: center;
    }
    #li {
        margin-top: 7%;
    }
    #titulo {
        width: 250px;
    }
    #editora {
        width: 250px;
    }
    select {
        border: 0;
        padding: 4px;
        background-color: #9FD7F9;
        margin: 2.5px;
        cursor: pointer;
        border-radius: 5px;
    }
    #deslogar {
        text-decoration: none;
        background-color: #CFEBFC;
        padding: 5px;
        color: black;
        border: 0;
        border-radius: 5px;
        height: 30px;
        margin-left: 5px;
    }
    #deslogar:hover {
        background-color: #6EC2F7;
        transition: 1.5s;
    }
    #logout {
        margin-top: 1.5%;
        height: 100%;
    }
    #cadastrar {
        margin-right: 2%;
        border-right: solid 1px black;
        padding-right: 1%;
    }
    @media (max-width: 768px) {
        .container {
            width: 100%;
            margin-left: 0;
        }
        ul {
            display: flex;
        }
        #botao {
            margin-top: 30%;
        }
    }
</style>