# The quotes API
The Quotes API (Application Programming Interface) can be used as follows:

## Get all the quotes
Use the following API entry point  
http://api.techlaunch.io/quotes/all.php   

To receive the following JSON response:
```
[
	...
	{
		"id": "165",
"text": "En un lugar de la mancha, de cuyo nombre no quiero acordarme",
		"author": "Miguel de Cervantes",
		"source": "El Ingenioso Hidalgo Don Quixote de la Mancha",
		"year": "1615"
	},
	{
		"id": "166",
"text": "Jim said that bees won't sting idiots, but I didn't believe that, because I tried them lots of times myself and they wouldn't sting me.",
		"author": "Mark Twain",
		"source": "Adventures of Huckleberry Finn",
		"year": "1884"
	},
	....
]
```

## Get one quote based on ID
Use the following API entry point  
http://api.techlaunch.io/quotes/pick.php?id=ID   

When passing ID 165, you will receive the following JSON response:  
```
{
	"id": "165",
	"quote": "En un lugar de la mancha, de cuyo nombre no quiero acordarme",
	"author": "Miguel de Cervantes",
	"source": "El Ingenioso Hidalgo Don Quixote de la Mancha",
	"year": "1615"
}
```
