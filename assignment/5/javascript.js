function getVowels() {
	var str = document.getElementById("textarea").value;
	var m = str.match(/[aeiou]/gi);
	if (m == null) {
		document.getElementById("result").innerHTML = "The number of vowels are: 0";
	} else {
		document.getElementById("result").innerHTML = "The number of vowels are:  " +m.length;
	}
}