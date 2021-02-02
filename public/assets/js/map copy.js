AmCharts.makeChart("map",{
					"type": "map",
					"pathToImages": "http://www.amcharts.com/lib/3/images/",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#FFFFFF",
					"projection": "mercator",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(0,0,0,1)",
					"dataProvider": {
						"map": "worldLow",
						"getAreasFromMap": true,
						"images": [
							{
								"top": 40,
								"left": 60,
								"width": 80,
								"height": 40,
								"pixelMapperLogo": true,
								"imageURL": "http://pixelmap.amcharts.com/static/img/logo.svg",
								"url": "http://www.amcharts.com"
							}
						],
						"areas": [
							{
								"id": "AE",
								"title": "United Arab Emirates",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "AU",
								"title": "Australia",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "BD",
								"title": "Bangladesh",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "BR",
								"title": "Brazil",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "CA",
								"title": "Canada",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "CL",
								"title": "Chile",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "CN",
								"title": "India",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "CZ",
								"title": "Czechia",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "DE",
								"title": "Germany",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "EG",
								"title": "Egypt",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "FR",
								"title": "France",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "GB",
								"title": "United Kingdom",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "GE",
								"title": "Georgia",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "IN",
								"title": "India",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "IT",
								"title": "Italy",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "JO",
								"title": "Jordan",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "JP",
								"title": "Japan",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "KE",
								"title": "Kenya",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "MA",
								"title": "Morocco",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "PH",
								"title": "Philippines",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "PL",
								"title": "Poland",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "PK",
								"title": "Pakistan",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "QA",
								"title": "Qatar",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "RU",
								"title": "Pakistan",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "SA",
								"title": "Saudi Arabia",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "TH",
								"title": "Thailand",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "TZ",
								"title": "Tanzania",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "UA",
								"title": "Ukraine",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "US",
								"title": "United States",
								"color": "rgba(4,67,183,1)"
							},
							{
								"id": "VN",
								"title": "Vietnam",
								"color": "rgba(4,67,183,1)"
							}
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverOutlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(129,129,129,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(129,129,129,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					},
					"zoomControl": {
						"zoomControlEnabled": false,
						"homeButtonEnabled": false,
						"panControlEnabled": false,
						"right": 38,
						"bottom": 30,
						"minZoomLevel": 0.25,
						"gridHeight": 100,
						"gridAlpha": 0.1,
						"gridBackgroundAlpha": 0,
						"gridColor": "#FFFFFF",
						"draggerAlpha": 1,
						"buttonCornerRadius": 2
					}
				});