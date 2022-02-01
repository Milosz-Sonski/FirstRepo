var SuperObjectClass = function() 
{
this.name = 'Marcin';
this.height = 183;
this.button = null;
this.init = function() 
{
var that = this;
this.button = document.createElement('input');
this.button.value = 'Kliknij';
this.button.type = 'button';
this.button.addEventListener('click', function() 
{
alert('To jest ' + this.nodeName); 
('Wzrost Marcina: ' + that.height); 
});document.querySelector('body').appendChild(this.button);
}
this.init();
}
var someObject = new SuperObjectClass();
var SuperObjectClass = function() 
{
this.name = 'Marcin';
this.height = 183;
this.button = null;
this.init = function() 
{
this.button = document.createElement('input');this.button.value = 'Kliknij';

this.button.type = 'button';
this.button.addEventListener('click', function(e) {
alert(e.target.value = this.height);
}.bind(this));
document.querySelector('body').appendChild(this.button);
}
this.init();
}
var someObject = new SuperObjectClass();
