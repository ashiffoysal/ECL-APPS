@extends('layouts.frontend')
@section('title', 'Verify')
@section('content')
    <style>
    h1, h2, h3, h4, h5, h6 {
    color: #102039;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    text-transform: capitalize;
    line-height: 1.2;
    margin-bottom: 0;
}
    .breadcrumb-section {
  padding: 100px 0;
  background-image: url("/frontend/breadcrumb-bg.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .breadcrumb-section {
      padding: 80px 0; } }
  @media (max-width: 767.98px) {
    .breadcrumb-section {
      padding: 60px 0; } }
  .breadcrumb-section ul {
    margin-top: 10px; }
    .breadcrumb-section ul li {
      display: inline-block;
      text-transform: capitalize;
      font-size: 18px;
      margin: 0 2px; }
      @media (min-width: 768px) and (max-width: 991.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      @media (max-width: 767.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      .breadcrumb-section ul li a {
        color: #606060;
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in; }
        .breadcrumb-section ul li a:hover {
          color: #fe630e; }
</style>
    <section class="breadcrumb-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Email Verify</h2>
                    <ul>
                        <li><a href="">home</a></li>
                        <li>/</li>
                        <li>Verify your email</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<style>


form {
  padding: 2rem;
  border-radius: 4px;
  box-shadow: -1px 8px 11px rgb(0 0 0 / 10%);
  max-width: 700px;
  background: #fff;
  
  .form-control {
    display: block;
    height: 50px;
    margin-right: 0.5rem;
    text-align: center;
    font-size: 1.25rem;
    min-width: 0;
    
    &:last-child {
      margin-right: 0;
    }
  }
}

.form-control {
    margin: 0px 5px;
    display: block;
    width: 100%;
    padding: 1.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-8 mt-10" style="padding-top: 106px;padding-bottom: 66px;">
                <p style="font-weight: 500;">Please check your email for 6 digit verification code, to continue with your exam booking.</p>
                <form method="POST" action="{{ route('verify.code') }}"> 
                                @csrf
                    <h4 class="text-center mb-4">Enter your code</h4>
                    <input type="number" hidden value="{{ $id }}" name="id">
                    <div class="d-flex mb-3">
                        <input type="tel"  name="first" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="second" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="third" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="forth" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="five" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="six" maxlength="1" pattern="[0-9]" class="form-control">
                    </div>
                    <button type="submit" class="theme-btn btn-style-nine">Verify Email</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
const form = document.querySelector('form')
const inputs = form.querySelectorAll('input')
const KEYBOARDS = {
  backspace: 8,
  arrowLeft: 37,
  arrowRight: 39,
}

function handleInput(e) {
  const input = e.target
  const nextInput = input.nextElementSibling
  if (nextInput && input.value) {
    nextInput.focus()
    if (nextInput.value) {
      nextInput.select()
    }
  }
}

function handlePaste(e) {
  e.preventDefault()
  const paste = e.clipboardData.getData('text')
  inputs.forEach((input, i) => {
    input.value = paste[i] || ''
  })
}

function handleBackspace(e) { 
  const input = e.target
  if (input.value) {
    input.value = ''
    return
  }
  
  input.previousElementSibling.focus()
}

function handleArrowLeft(e) {
  const previousInput = e.target.previousElementSibling
  if (!previousInput) return
  previousInput.focus()
}

function handleArrowRight(e) {
  const nextInput = e.target.nextElementSibling
  if (!nextInput) return
  nextInput.focus()
}

form.addEventListener('input', handleInput)
inputs[0].addEventListener('paste', handlePaste)

inputs.forEach(input => {
  input.addEventListener('focus', e => {
    setTimeout(() => {
      e.target.select()
    }, 0)
  })
  
  input.addEventListener('keydown', e => {
    switch(e.keyCode) {
      case KEYBOARDS.backspace:
        handleBackspace(e)
        break
      case KEYBOARDS.arrowLeft:
        handleArrowLeft(e)
        break
      case KEYBOARDS.arrowRight:
        handleArrowRight(e)
        break
      default:  
    }
  })
})

</script>
@endsection