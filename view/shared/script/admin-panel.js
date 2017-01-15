// Wait for document to load before registering other events.
document.addEventListener("DOMContentLoaded", function(e) {
	// Show mosaic pricing according to chosen type.
	var cutType = document.querySelectorAll('input[type=radio]');
	var i = 0,
		len = cutType.length;
	while (i < len) {
		cutType[i].addEventListener('change', function() {
			switch (this.value) {
				case 'distributed':
					var dist = document.getElementById('mosaic-distributed-price');
					dist.className = dist.className.replace(/(?:^|\s)display-none(?!\S)/ , '')
					var man = document.getElementById('mosaic-manual-price');
					man.className = 'form-group display-none';
					break;
				case 'manual':
					var num = document.getElementById('mosaic-cut').value;

					addPieces(num, function() {
						var man = document.getElementById('mosaic-manual-price');
						man.className = man.className.replace(/(?:^|\s)display-none(?!\S)/ , '')
						var dist = document.getElementById('mosaic-distributed-price');
						dist.className = 'form-group display-none';
					});
					break;
				default:
					var dist = document.getElementById('mosaic-distributed-price');
					dist.className = 'form-group display-none';
					var man = document.getElementById('mosaic-manual-price');
					man.className = 'form-group display-none';
			}
		});
		i++;
	}

	// Change the number of price settings elements according to the new number.
	// If settings are set to manual.
	var pieceNumSet = document.getElementById('mosaic-cut');
	pieceNumSet.addEventListener('change', function() {
		var cutType = document.querySelectorAll('input[type=radio]');
		var i = 0,
			len = cutType.length;

		while (i < len) {
			if (cutType[i].value == 'manual' && cutType[i].checked) {
				addPieces(this.value, null);
			}
			i++;
		}
	});
});

addPieces = function(num, callback) {
	var container = document.getElementById('mosaic-pieces-container');
	container.innerHTML = '';
	var i = 0;
	while (i < num) {
		var priceGroup = document.createElement('div');
		priceGroup.className = 'mosaic-piece-group';

		var pieceId = i + 1;

		var priceLabel = document.createElement('label');
		priceLabel.innerHTML = 'Košček ' + pieceId;
		priceLabel.setAttribute('for', 'mosaic-piece-' + pieceId);

		var priceInput = document.createElement('input');
		priceInput.id = 'mosaic-piece-' + pieceId;
		priceInput.type = 'number';
		priceInput.name = 'mosaic-piece-' + pieceId;
		priceInput.value = 1;
		priceInput.min = 0.01;
		priceInput.step = 0.01;

		container.appendChild(priceGroup);
		priceGroup.appendChild(priceLabel);
		priceGroup.appendChild(priceInput);
		i++;
	}

	if (callback) callback();
};
