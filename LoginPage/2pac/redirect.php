
<!DOCTYPE html>
<html>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button5:hover {
    background-color: #555555;
    color: white;
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<center><h1> you are not logged in!</h1>
<input type="button" value="<< back to login" class="button button5" id="btnHome" 
onClick="document.location.href='../index.php'" /></center>
<html>
