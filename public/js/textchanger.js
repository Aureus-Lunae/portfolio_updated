/**
 * Text Changer
 */
console.log(`TextChanger Started`);

class textSlider {
	constructor(id, items, timer=2000) {
		this.id = document.getElementById(id);
		this.items = items;
		this.length = items.length-1;
		this.timer = timer;
		this.index = 0;
		console.log(`textSlider constructed`);
	}

	runSlider () {
		if (this.index < this.length) {
			this.index++;
		} else {
			this.index = 0;
		}
		this.id.innerHTML = this.items[this.index];
	}

	start() {
		let startTimer = setInterval(this.runSlider.bind(this), this.timer)
	}
}