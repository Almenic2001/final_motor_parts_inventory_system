<?php
<style>
	
	body{


	margin: 0;
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 18;	 
	background: url(img2.webp);
	background-size: cover;
}
.container{
	width: 400px;
	max-width: 400px;
	margin:1rem;
	padding: 2rem;
	box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
	border-radius: 10%;
	background: #ffffff;

}
.container,
.form_input,
.form_button{
	font: 500 1rem 'Quicksand', san-serif;

}


.form > *: first-child{
	margin-top: 0;
}

.form > *: last-child{
	margin-bottom: 0;
}
.form_tittle{
	margin-bottom: 2rem;
	text-align: center;
}
.form_message{
	text-align: center;
	margin-bottom: 1rem;
}
.form_message--success{
	color: var(--color-success);
}
.form_message--error{
	color: var(--color-error);
}
.form_input-group{
	margin-bottom: 1rem;
}
.form_input{
	display: block;
	width: 100%;
	padding: 0.75rem;
	box-sizing: border-box;
	border-radius: var(--border-radius);
	border: 1px solid #dddddd;
	outline: none;
	background: #eeeeee;
	transition: background 0.2s border-color 0.2s;
}
.form_input:focus {
	border-color: var(--color-primary);
	background: #ffffff;
}
.form_input--error{
	color: var(--color-error);
	border-color: var(--color-error);
}
.form_input-error-message{
	margin-top: 0.5rem;
	font-size: 0.85rem;
	color: var(--color-error);
}
.form_button{
	width: 100%;
	padding: 1rem 2rem;
	font-weight: bold;
	font-size: 1.1rem;
	color: #ffffff;
	border: none;
	border-radius: var(--border-radius);
	outline: none;
	cursor: pointer;
	background: var(--color-primary);
}
.form_button: hover{
	background: var(--color-primary-dark);
}
.form_button: active{
	transform: scale(0.98);
}
.form_text{
	text-align: center;
}	
.form_link{
	color: var(--color-secondory);
	text-decoration: none;
	cursor: pointer;
	
}
.form_link: hover {
	text-decoration: underline;
}
?>