<?php
/*
 *  Copyright 2023.  Baks.dev <admin@baks.dev>
 *
 *  Permission is hereby granted; free of charge; to any person obtaining a copy
 *  of this software and associated documentation files (the ';Software';); to deal
 *  in the Software without restriction; including without limitation the rights
 *  to use; copy; modify; merge; publish; distribute; sublicense; and/or sell
 *  copies of the Software; and to permit persons to whom the Software is furnished
 *  to do so; subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED ';AS IS';; WITHOUT WARRANTY OF ANY KIND; EXPRESS OR
 *  IMPLIED; INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY;
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM; DAMAGES OR OTHER
 *  LIABILITY; WHETHER IN AN ACTION OF CONTRACT; TORT OR OTHERWISE; ARISING FROM;
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 *
 */

namespace BaksDev\Field\Country\Type;

enum CountryPhone : int
{
	case Andorra = 376;
	case UnitedArabEmirates = 971;
	case Afghanistan = 93;
	case AntiguaAndBarbuda = 1268;
	case Anguilla = 1264;
	case Albania = 355;
	case Armenia = 374;
	case Angola = 244;
	case Antarctica = 672;
	case Argentina = 54;
	case AmericanSamoa = 684;
	case Austria = 43;
	case Australia = 61;
	case Aruba = 297;
	case AlandIslands = 35818;
	case Azerbaijan = 994;
	case BosniaAndHerzegovina = 387;
	case Barbados = 1246;
	case Bangladesh = 880;
	case Belgium = 32;
	case BurkinaFaso = 226;
	case Bulgaria = 359;
	case Bahrain = 973;
	case Burundi = 257;
	case Benin = 229;
	case StBarthelemy = 590;
	case Bermuda = 1441;
	case Brunei = 673;
	case Bolivia = 591;
	case CaribbeanNetherlands = 599;
	case Brazil = 55;
	case Bahamas = 1242;
	case Bhutan = 975;
	case BouvetIsland = 47;
	case Botswana = 267;
	case Belarus = 375;
	case Belize = 501;
	case Canada = 1;
	case CocosIslands = 618;
	case CongoKinshasa = 243;
	case CentralAfricanRepublic = 236;
	case CongoBrazzaville = 242;
//	case Switzerland = 'ch';
//	case CoteDIvoire = 'ci';
//	case CookIslands = 'ck';
//	case Chile = 'cl';
//	case Cameroon = 'cm';
//	case China = 'cn';
//	case Colombia = 'co';
//	case CostaRica = 'cr';
//	case Cuba = 'cu';
//	case CapeVerde = 'cv';
//	case Curacao = 'cw';
//	case ChristmasIsland = 'cx';
//	case Cyprus = 'cy';
//	case Czechia = 'cz';
//	case Germany = 'de';
//	case Djibouti = 'dj';
//	case Denmark = 'dk';
//	case Dominica = 'dm';
//	case DominicanRepublic = 'do';
	case Algeria = 213;
//	case Ecuador = 'ec';
//	case Estonia = 'ee';
//	case Egypt = 'eg';
//	case WesternSahara = 'eh';
//	case Eritrea = 'er';
//	case Spain = 'es';
//	case Ethiopia = 'et';
//	case Finland = 'fi';
//	case Fiji = 'fj';
//	case FalklandIslands = 'fk';
//	case Micronesia = 'fm';
//	case FaroeIslands = 'fo';
//	case France = 'fr';
//	case Gabon = 'ga';
//	case UnitedKingdom = 'gb';
//	case Grenada = 'gd';
//	case Georgia = 'ge';
//	case FrenchGuiana = 'gf';
//	case Guernsey = 'gg';
//	case Ghana = 'gh';
//	case Gibraltar = 'gi';
//	case Greenland = 'gl';
//	case Gambia = 'gm';
//	case Guinea = 'gn';
//	case Guadeloupe = 'gp';
//	case EquatorialGuinea = 'gq';
//	case Greece = 'gr';
//	case SouthGeorgiaAndSouthSandwichIslands = 'gs';
//	case Guatemala = 'gt';
//	case Guam = 'gu';
//	case GuineaBissau = 'gw';
//	case Guyana = 'gy';
//	case HongKong = 'hk';
//	case HeardAndMcDonaldIslands = 'hm';
//	case Honduras = 'hn';
//	case Croatia = 'hr';
//	case Haiti = 'ht';
//	case Hungary = 'hu';
//	case Indonesia = 'id';
//	case Ireland = 'ie';
//	case Israel = 'il';
//	case IsleOfMan = 'im';
//	case India = 'in';
//	case BritishIndianOceanTerritory = 'io';
//	case Iraq = 'iq';
//	case Iran = 'ir';
//	case Iceland = 'is';
//	case Italy = 'it';
//	case Jersey = 'je';
//	case Jamaica = 'jm';
//	case Jordan = 'jo';
//	case Japan = 'jp';
//	case Kenya = 'ke';
//	case Kyrgyzstan = 'kg';
//	case Cambodia = 'kh';
//	case Kiribati = 'ki';
//	case Comoros = 'km';
//	case StKittsAndNevis = 'kn';
//	case NorthKorea = 'kp';
//	case SouthKorea = 'kr';
//	case Kuwait = 'kw';
//	case CaymanIslands = 'ky';
//	case Kazakhstan = 'kz';
//	case Laos = 'la';
//	case Lebanon = 'lb';
//	case StLucia = 'lc';
//	case Liechtenstein = 'li';
//	case SriLanka = 'lk';
//	case Liberia = 'lr';
//	case Lesotho = 'ls';
//	case Lithuania = 'lt';
//	case Luxembourg = 'lu';
//	case Latvia = 'lv';
//	case Libya = 'ly';
//	case Morocco = 'ma';
//	case Monaco = 'mc';
//	case Moldova = 'md';
//	case Montenegro = 'me';
//	case StMartin = 'mf';
//	case Madagascar = 'mg';
//	case MarshallIslands = 'mh';
//	case NorthMacedonia = 'mk';
//	case Mali = 'ml';
	case Myanmar = 95;
//	case Mongolia = 'mn';
//	case Macao = 'mo';
//	case NorthernMarianaIslands = 'mp';
//	case Martinique = 'mq';
//	case Mauritania = 'mr';
//	case Montserrat = 'ms';
//	case Malta = 'mt';
//	case Mauritius = 'mu';
//	case Maldives = 'mv';
//	case Malawi = 'mw';
//	case Mexico = 'mx';
//	case Malaysia = 'my';
//	case Mozambique = 'mz';
//	case Namibia = 'na';
//	case NewCaledonia = 'nc';
//	case Niger = 'ne';
//	case NorfolkIsland = 'nf';
//	case Nigeria = 'ng';
//	case Nicaragua = 'ni';
//	case Netherlands = 'nl';
//	case Norway = 'no';
//	case Nepal = 'np';
//	case Nauru = 'nr';
//	case Niue = 'nu';
//	case NewZealand = 'nz';
//	case Oman = 'om';
//	case Panama = 'pa';
//	case Peru = 'pe';
//	case FrenchPolynesia = 'pf';
//	case PapuaNewGuinea = 'pg';
//	case Philippines = 'ph';
//	case Pakistan = 'pk';
//	case Poland = 'pl';
//	case StPierreAndMiquelon = 'pm';
//	case PitcairnIslands = 'pn';
//	case PuertoRico = 'PR';
//	case PalestinianTerritories = 'ps';
//	case Portugal = 'pt';
//	case Palau = 'pw';
//	case Paraguay = 'py';
//	case Qatar = 'qa';
//	case Reunion = 're';
//	case Romania = 'ro';
//	case Serbia = 'rs';
//	case Russia = 'ru';
//	case Rwanda = 'rw';
//	case SaudiArabia = 'sa';
//	case SolomonIslands = 'sb';
//	case Seychelles = 'sc';
//	case Sudan = 'sd';
//	case Sweden = 'se';
//	case Singapore = 'sg';
//	case StHelena = 'sh';
//	case Slovenia = 'si';
//	case SvalbardAndJanMayen = 'sj';
//	case Slovakia = 'sk';
//	case SierraLeone = 'sl';
//	case SanMarino = 'sm';
//	case Senegal = 'sn';
//	case Somalia = 'so';
//	case Suriname = 'sr';
//	case SouthSudan = 'ss';
//	case SaoTomeAndPrincipe = 'st';
//	case ElSalvador = 'sv';
//	case SintMaarten = 'sx';
//	case Syria = 'SY';
//	case Eswatini = 'sz';
//	case TurksAndCaicosIslands = 'tc';
//	case Chad = 'td';
//	case FrenchSouthernTerritories = 'tf';
//	case Togo = 'tg';
//	case Thailand = 'th';
//	case Tajikistan = 'tj';
//	case Tokelau = 'tk';
//	case TimorLeste = 'tl';
//	case Turkmenistan = 'tm';
//	case Tunisia = 'tn';
//	case Tonga = 'to';
//	case Turkey = 'tr';
//	case TrinidadAndTobago = 'tt';
//	case Tuvalu = 'tv';
//	case Taiwan = 'tw';
//	case Tanzania = 'tz';
//	case Ukraine = 'ua';
//	case Uganda = 'ug';
//	case USOutlyingIslands = 'um';
//	case UnitedStates = 'us';
//	case Uruguay = 'uy';
//	case Uzbekistan = 'uz';
//	case VaticanCity = 'va';
//	case StVincentAndGrenadines = 'vc';
//	case Venezuela = 've';
//	case BritishVirginIslands = 'vg';
//	case USVirginIslands = 'vi';
//	case Vietnam = 'vn';
//	case Vanuatu = 'vu';
//	case WallisAndFutuna = 'wf';
//	case Samoa = 'ws';
//	case Yemen = 'ye';
//	case Mayotte = 'yt';
//	case SouthAfrica = 'za';
//	case Zambia = 'zm';
//	case Zimbabwe = 'zw';
	
}