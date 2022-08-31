    function switchTab(id)
{
	var element = document.getElementById(id);

	if (!element.parentNode.classList.contains('active'))
	{
		var menu_items = element.parentElement.parentElement.children;

		for (var i = 0; i < menu_items.length; ++i)
		{
			if (menu_items[i].classList.contains('active'))
			{
				menu_items[i].classList.remove('active');
				document.getElementById('c' + menu_items[i].firstChild.id.substr(1)).classList.add('hidden');
			}
		}

		element.parentNode.classList.add('active');
		document.getElementById('c' + element.id.substr(1)).classList.remove('hidden');
	}
}

var menus = document.getElementsByClassName('nav');

for (var i = 0; i < menus.length; ++i)
{
	for (var j = 0; j < menus[i].children.length; ++j)
		menus[i].children[j].firstChild.addEventListener('click', function () {switchTab(this.id)}, false);
}


