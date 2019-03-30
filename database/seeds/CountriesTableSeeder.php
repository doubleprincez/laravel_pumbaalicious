<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Country::create([
            'id'=> 1,
            'country_name'=>'Afghanistan',
            'iso'=>'AFG',
            'calling_code'=>93
        ]);
        Country::create([
            'id'=> 2,
            'country_name'=>'Albania',
            'iso'=>'ALB',
            'calling_code'=>355
        ]);

        Country::create([
            'id'=>3,
            'country_name'=>'Algeria',
            'iso'=>'DZA',
            'calling_code'=>213
        ]);

        Country::create([
            'id'=>  4,
            'country_name'=>'Andorra',
            'iso'=>'AND',
            'calling_code'=>376
        ]);
        Country::create([
            'id'=>5,
            'country_name'=>'Angola',
            'iso'=>'AGO',
            'calling_code'=>244
        ]);

        Country::create([
            'id'=> 6,
            'country_name'=>'Antigua and Barbuda',
            'iso'=>'ATG',
            'calling_code'=>268
        ]);


        Country::create([
            'id'=> 7,
            'country_name'=>'Argentina',
            'iso'=>'ARG',
            'calling_code'=>54
        ]);

        Country::create([
            'id'=>8,
            'country_name'=>'Armenia',
            'iso'=>'ARM',
            'calling_code'=>374
        ]);

        Country::create([
            'id'=>9,
            'country_name'=>'Australia',
            'iso'=>'AUS',
            'calling_code'=>61
        ]);

        Country::create([
            'id'=> 10,
            'country_name'=>'Austria',
            'iso'=>'AUT',
            'calling_code'=>43
        ]);


        Country::create([
            'id'=>11,
            'country_name'=>'Azerbaijan',
            'iso'=>  'AZE',
            'calling_code'=> 994
        ]);
        Country::create([
            'id'=>12,
            'country_name'=>'Bahamas',
            'iso'=> 'BHS',
            'calling_code'=> 242
        ]);


        Country::create([
            'id'=>13,
            'country_name'=> 'Bahrain',
            'iso'=>'BHR',
            'calling_code'=> 973
        ]);
        Country::create([
            'id'=>14,
            'country_name'=> 'Bangladesh',
            'iso'=>'BGD',
            'calling_code'=> 880
        ]);
        Country::create([
            'id'=>15,
            'country_name'=>'Barbados',
            'iso'=>'BRB',
            'calling_code'=>246
        ]);



        Country::create([
            'id'=>16,
            'country_name'=>'Belarus',
            'iso'=>'BLR',
            'calling_code'=> 375
        ]);
        Country::create([
            'id'=>17,
            'country_name'=>'Belgium',
            'iso'=>'BEL',
            'calling_code'=>  32
        ]);

        Country::create([
            'id'=>18,
            'country_name'=>'Belize',
            'iso'=>'BLZ',
            'calling_code'=> 501
        ]);
        Country::create([
            'id'=>19,
            'country_name'=>'Benin',
            'iso'=>'BEN',
            'calling_code'=> 229
        ]);
        Country::create([
            'id'=>20,
            'country_name'=>'Bhutan',
            'iso'=>'BTN',
            'calling_code'=> 975
        ]);
        Country::create([
            'id'=>21,
            'country_name'=>'Bolivia',
            'iso'=>'BOL',
            'calling_code'=> 591
        ]);


        Country::create([
            'id'=>22,
            'country_name'=>'Bosnia and Herzegovina',
            'iso'=> 'BIH',
            'calling_code'=> 387
        ]);
        Country::create([
            'id'=>23,
            'country_name'=>'Botswana',
            'iso'=> 'BWA',
            'calling_code'=> 267
        ]);




        Country::create([
            'id'=>24,
            'country_name'=>'Brazil',
            'iso'=>'BRA',
            'calling_code'=> 55
        ]);
        Country::create([
            'id'=>25,
            'country_name'=>'Brunei Darussalam',
            'iso'=>'BRN',
            'calling_code'=>673
        ]);
        Country::create([
            'id'=>26,
            'country_name'=>'Bulgaria',
            'iso'=>'BGR',
            'calling_code'=> 359
        ]);


        Country::create([
            'id'=>27,
            'country_name'=> 'Burkina Faso',
            'iso'=>'BFA',
            'calling_code'=> 226
        ]);
        Country::create([
            'id'=>28,
            'country_name'=>'Burundi',
            'iso'=> 'BDI',
            'calling_code'=> 257
        ]);


        Country::create([
            'id'=>29,
            'country_name'=>'Cambodia',
            'iso'=> 'KHM',
            'calling_code'=> 855
        ]);
        Country::create([
            'id'=>30,
            'country_name'=>'Cameroon',
            'iso'=>'CMR',
            'calling_code'=> 237
        ]);
        Country::create([
            'id'=>31,
            'country_name'=>'Canada',
            'iso'=>'CAN',
            'calling_code'=> 1
        ]);
        Country::create([
            'id'=>32,
            'country_name'=>'Central African Republic',
            'iso'=>'CAF',
            'calling_code'=> 236
        ]);


        Country::create([
            'id'=>33,
            'country_name'=>'Chad',
            'iso'=>'TCD',
            'calling_code'=> 235
        ]);





        Country::create([
            'id'=>34,
            'country_name'=>'Chile',
            'iso'=>'CHL',
            'calling_code'=>56
        ]);
        Country::create([
            'id'=>35,
            'country_name'=>'China',
            'iso'=>'CHN',
            'calling_code'=> 86
        ]);

        Country::create([
            'id'=>36,
            'country_name'=>'Colombia',
            'iso'=>'COL',
            'calling_code'=> 57
        ]);
        Country::create([
            'id'=>37,
            'country_name'=> 'Comoros',
            'iso'=>'COM',
            'calling_code'=>269
        ]);
        Country::create([
            'id'=>38,
            'country_name'=>'Congo',
            'iso'=> 'COG',
            'calling_code'=> 243
        ]);



        Country::create([
            'id'=>39,
            'country_name'=>'Cook Islands',
            'iso'=> 'COK',
            'calling_code'=> 682
        ]);
        Country::create([
            'id'=>40,
            'country_name'=>'Costa Rica',
            'iso'=>'CRI',
            'calling_code'=> 506
        ]);
        Country::create([
            'id'=>42,
            'country_name'=>'Croatia',
            'iso'=>'HRV',
            'calling_code'=>385
        ]);

        Country::create([
            'id'=>43,
            'country_name'=>'Cuba',
            'iso'=>'CUB',
            'calling_code'=> 53
        ]);
        Country::create([
            'id'=>44,
            'country_name'=>'Cyprus',
            'iso'=>'CYP',
            'calling_code'=> 357
        ]);
        Country::create([
            'id'=>45,
            'country_name'=>'Czechia',
            'iso'=> 'CZE',
            'calling_code'=> 420
        ]);

        Country::create([
            'id'=>46,
            'country_name'=>'Denmark',
            'iso'=>'DNK',
            'calling_code'=> 45
        ]);



        Country::create([
            'id'=>47,
            'country_name'=> 'Djibouti',
            'iso'=>'DJI',
            'calling_code'=>253
        ]);
        Country::create([
            'id'=>48,
            'country_name'=>'Dominica',
            'iso'=>'DMA',
            'calling_code'=>767
        ]);




        Country::create([
            'id'=> 49,
            'country_name'=>'Dominican Republic',
            'iso'=>'DOM',
            'calling_code'=>809
        ]);


        Country::create([
            'id'=>50,
            'country_name'=>'Ecuador',
            'iso'=>'ECU',
            'calling_code'=>593
        ]);


        Country::create([
            'id'=>51,
            'country_name'=>'Egypt',
            'iso'=> 'EGY',
            'calling_code'=>20
        ]);


        Country::create([
            'id'=>52,
            'country_name'=>'El Salvador',
            'iso'=> 'SLV',
            'calling_code'=>503
        ]);




        Country::create([
            'id'=>53,
            'country_name'=>'Equatorial Guinea',
            'iso'=> 'GNQ',
            'calling_code'=> 240
        ]);


        Country::create([
            'id'=>54,
            'country_name'=>'Eritrea',
            'iso'=>'ERI',
            'calling_code'=> 291
        ]);



        Country::create([
            'id'=>55,
            'country_name'=> 'Estonia',
            'iso'=>'EST',
            'calling_code'=>372
        ]);


        Country::create([
            'id'=>56,
            'country_name'=>'Ethiopia',
            'iso'=> 'ETH',
            'calling_code'=> 251
        ]);

        Country::create([
            'id'=>57,
            'country_name'=> 'Faroe Islands',
            'iso'=>'FRO',
            'calling_code'=>298
        ]);


        Country::create([
            'id'=>58,
            'country_name'=>'Fiji',
            'iso'=>'FJI',
            'calling_code'=> 679
        ]);


        Country::create([
            'id'=>59,
            'country_name'=> 'Finland',
            'iso'=>'FIN',
            'calling_code'=>358
        ]);



        Country::create([
            'id'=>60,
            'country_name'=>'France',
            'iso'=>'FRA',
            'calling_code'=>33
        ]);


        Country::create([
            'id'=>61,
            'country_name'=>'Gabon',
            'iso'=>'GAB',
            'calling_code'=>241
        ]);


        Country::create([
            'id'=>62,
            'country_name'=>'Gambia',
            'iso'=>'GMB',
            'calling_code'=>220
        ]);


        Country::create([
            'id'=>63,
            'country_name'=>'Georgia',
            'iso'=> 'GEO',
            'calling_code'=> 995
        ]);



        Country::create([
            'id'=>64,
            'country_name'=>'Germany',
            'iso'=>'DEU',
            'calling_code'=> 49
        ]);


        Country::create([
            'id'=>65,
            'country_name'=> 'Ghana',
            'iso'=>'GHA',
            'calling_code'=> 233
        ]);



        Country::create([
            'id'=>66,
            'country_name'=>'Greece',
            'iso'=>'GRC',
            'calling_code'=>30
        ]);





        Country::create([
            'id'=>67,
            'country_name'=> 'Grenada',
            'iso'=>'GRD',
            'calling_code'=> 473
        ]);




        Country::create([
            'id'=>68,
            'country_name'=>'Guatemala',
            'iso'=> 'GTM',
            'calling_code'=> 502
        ]);



        Country::create([
            'id'=>69,
            'country_name'=>'Guinea',
            'iso'=>'GIN',
            'calling_code'=>224
        ]);




        Country::create([
            'id'=>70,
            'country_name'=> 'Guinea-Bissau',
            'iso'=> 'GNB',
            'calling_code'=>245
        ]);


        Country::create([
            'id'=>71,
            'country_name'=>'Guyana',
            'iso'=> 'GUY',
            'calling_code'=> 592
        ]);







        Country::create([
            'id'=>72,
            'country_name'=>'Haiti',
            'iso'=>'HTI',
            'calling_code'=> 509
        ]);



        Country::create([
            'id'=>73,
            'country_name'=>'Honduras',
            'iso'=>  'HND',
            'calling_code'=>504
        ]);



        Country::create([
            'id'=>74,
            'country_name'=>'Hungary',
            'iso'=>'HUN',
            'calling_code'=> 36
        ]);



        Country::create([
            'id'=>75,
            'country_name'=>'Iceland',
            'iso'=>'ISL',
            'calling_code'=>  354
        ]);


        Country::create([
            'id'=>76,
            'country_name'=>'India',
            'iso'=> 'IND',
            'calling_code'=> 91
        ]);



        Country::create([
            'id'=>77,
            'country_name'=>'Indonesia',
            'iso'=> 'IDN',
            'calling_code'=>62
        ]);


        Country::create([
            'id'=>78,
            'country_name'=>'Iran',
            'iso'=> 'IRN',
            'calling_code'=>  98
        ]);






        Country::create([
            'id'=>79,
            'country_name'=> 'Iraq',
            'iso'=>'IRQ',
            'calling_code'=> 964
        ]);


        Country::create([
            'id'=>80,
            'country_name'=>'Ireland',
            'iso'=> 'IRL',
            'calling_code'=>353
        ]);







        Country::create([
            'id'=>81,
            'country_name'=>'Israel',
            'iso'=> 'ISR',
            'calling_code'=>972
        ]);


        Country::create([
            'id'=>82,
            'country_name'=>'Italy',
            'iso'=>'ITA',
            'calling_code'=> 39
        ]);



        Country::create([
            'id'=>83,
            'country_name'=> 'Jamaica',
            'iso'=>'JAM',
            'calling_code'=> 876
        ]);


        Country::create([
            'id'=>84,
            'country_name'=>'Japan',
            'iso'=>'JPN',
            'calling_code'=> 81
        ]);


        Country::create([
            'id'=>85,
            'country_name'=>'Jordan',
            'iso'=>'JOR',
            'calling_code'=>962
        ]);


        Country::create([
            'id'=>86,
            'country_name'=>'Kazakhstan',
            'iso'=> 'KAZ',
            'calling_code'=>7
        ]);



        Country::create([
            'id'=>87,
            'country_name'=>'Kenya',
            'iso'=>'KEN',
            'calling_code'=> 254
        ]);


        Country::create([
            'id'=>88,
            'country_name'=>'Kiribati',
            'iso'=> 'KIR',
            'calling_code'=>686
        ]);



        Country::create([
            'id'=>89,
            'country_name'=>'Kuwait',
            'iso'=>'KWT',
            'calling_code'=> 965
        ]);


        Country::create([
            'id'=>90,
            'country_name'=>'Kyrgyzstan',
            'iso'=>'KGZ',
            'calling_code'=> 996
        ]);


        Country::create([
            'id'=>91,
            'country_name'=>'Lao',
            'iso'=> 'LAO',
            'calling_code'=> 856
        ]);




        Country::create([
            'id'=>92,
            'country_name'=>'Latvia',
            'iso'=>'LVA',
            'calling_code'=>371
        ]);


        Country::create([
            'id'=>93,
            'country_name'=>'Lebanon',
            'iso'=>'LBN',
            'calling_code'=> 961
        ]);




        Country::create([
            'id'=>94,
            'country_name'=>'Lesotho',
            'iso'=>'LSO',
            'calling_code'=> 266
        ]);

        Country::create([
            'id'=>95,
            'country_name'=>'Liberia',
            'iso'=>'LBR',
            'calling_code'=> 231
        ]);



        Country::create([
            'id'=>96,
            'country_name'=>'Libya',
            'iso'=> 'LBY',
            'calling_code'=> 218
        ]);

        Country::create([
            'id'=>97,
            'country_name'=>'Lithuania',
            'iso'=>'LTU',
            'calling_code'=> 370
        ]);


        Country::create([
            'id'=>98,
            'country_name'=>'Luxembourg',
            'iso'=> 'LUX',
            'calling_code'=> 352
        ]);

        Country::create([
            'id'=>99,
            'country_name'=>'Madagascar',
            'iso'=>'MDG',
            'calling_code'=> 261
        ]);



        Country::create([
            'id'=>100,
            'country_name'=> 'Malawi',
            'iso'=>'MWI',
            'calling_code'=>265
        ]);


        Country::create([
            'id'=>101,
            'country_name'=>'Malaysia',
            'iso'=> 'MYS',
            'calling_code'=> 60
        ]);


        Country::create([
            'id'=>102,
            'country_name'=> 'Maldives',
            'iso'=> 'MDV',
            'calling_code'=> 960
        ]);

        Country::create([
            'id'=>103,
            'country_name'=>'Mali',
            'iso'=>'MLI',
            'calling_code'=> 223
        ]);




        Country::create([
            'id'=>104,
            'country_name'=>'Malta',
            'iso'=>'MLT',
            'calling_code'=> 356
        ]);

        Country::create([
            'id'=>105,
            'country_name'=> 'Marshall Islands',
            'iso'=> 'MHL',
            'calling_code'=>692
        ]);




        Country::create([
            'id'=>106,
            'country_name'=>'Mauritania',
            'iso'=>'MRT',
            'calling_code'=> 222
        ]);

        Country::create([
            'id'=>107,
            'country_name'=>'Mauritius',
            'iso'=>  'MUS',
            'calling_code'=>230
        ]);


        Country::create([
            'id'=>108,
            'country_name'=>'Mexico',
            'iso'=> 'MEX',
            'calling_code'=> 52
        ]);

        Country::create([
            'id'=>109,
            'country_name'=>'Micronesia',
            'iso'=> 'FSM',
            'calling_code'=> 691
        ]);




        Country::create([
            'id'=>110,
            'country_name'=>'Monaco',
            'iso'=>'MCO',
            'calling_code'=>377
        ]);

        Country::create([
            'id'=>111,
            'country_name'=>'Mongolia',
            'iso'=> 'MNG',
            'calling_code'=> 976
        ]);

        Country::create([
            'id'=>112,
            'country_name'=>'Montenegro',
            'iso'=>'MNE',
            'calling_code'=> 382
        ]);

        Country::create([
            'id'=>113,
            'country_name'=>'Morocco',
            'iso'=> 'MAR',
            'calling_code'=>212
        ]);



        Country::create([
            'id'=>114,
            'country_name'=>'Mozambique',
            'iso'=> 'MOZ',
            'calling_code'=>258
        ]);

        Country::create([
            'id'=>115,
            'country_name'=> 'Myanmar',
            'iso'=>'MMR',
            'calling_code'=> 95
        ]);





        Country::create([
            'id'=>116,
            'country_name'=>'Namibia',
            'iso'=>'NAM',
            'calling_code'=>264
        ]);

        Country::create([
            'id'=>117,
            'country_name'=>'Nauru',
            'iso'=>'NRU',
            'calling_code'=> 674
        ]);




        Country::create([
            'id'=>118,
            'country_name'=>'Nepal',
            'iso'=> 'NPL',
            'calling_code'=> 977
        ]);


        Country::create([
            'id'=>119,
            'country_name'=>'Netherlands',
            'iso'=>'NLD',
            'calling_code'=>31
        ]);



        Country::create([

            'id'=>120,
            'country_name'=>'New Zealand',
            'iso'=> 'NZL',
            'calling_code'=>64
        ]);

        Country::create([
            'id'=>121,
            'country_name'=> 'Nicaragua',
            'iso'=>'NIC',
            'calling_code'=> 505
        ]);


        Country::create([
            'id'=>122,
            'country_name'=> 'Niger',
            'iso'=>'NER',
            'calling_code'=> 227
        ]);


        Country::create([
            'id'=>123,
            'country_name'=>'Nigeria',
            'iso'=>'NGA',
            'calling_code'=>234
        ]);


        Country::create([
            'id'=>124,
            'country_name'=> 'Niue',
            'iso'=>'NIU',
            'calling_code'=>683
        ]);


        Country::create([
            'id'=>125,
            'country_name'=>'Norway',
            'iso'=>'NOR',
            'calling_code'=>47
        ]);

        Country::create([
            'id'=>126,
            'country_name'=> 'Oman',
            'iso'=> 'OMN',
            'calling_code'=>968
        ]);


        Country::create([
            'id'=>127,
            'country_name'=>'Pakistan',
            'iso'=> 'PAK',
            'calling_code'=> 92
        ]);

        Country::create([
            'id'=>128,
            'country_name'=>'Palau',
            'iso'=>'PLW',
            'calling_code'=>  680
        ]);

        Country::create([
            'id'=>129,
            'country_name'=> 'Panama',
            'iso'=>'PAN',
            'calling_code'=>507
        ]);

        Country::create([
            'id'=>130,
            'country_name'=>'Papua New Guinea',
            'iso'=>'PNG',
            'calling_code'=> 675
        ]);




        Country::create([
            'id'=>131,
            'country_name'=>'Paraguay',
            'iso'=>'PRY',
            'calling_code'=>595
        ]);

        Country::create([
            'id'=>132,
            'country_name'=>'Peru',
            'iso'=> 'PER',
            'calling_code'=> 51
        ]);



        Country::create([
            'id'=>133,
            'country_name'=>'Philippines',
            'iso'=>'PHL',
            'calling_code'=>63
        ]);
        Country::create([
            'id'=>134,
            'country_name'=>'Poland',
            'iso'=> 'POL',
            'calling_code'=> 48
        ]);

        Country::create([
            'id'=>135,
            'country_name'=>'Portuguese Republic',
            'iso'=>'PRT',
            'calling_code'=> 351
        ]);





        Country::create([
            'id'=>136,
            'country_name'=>'Qatar',
            'iso'=> 'QAT',
            'calling_code'=>974
        ]);


        Country::create([
            'id'=>137,
            'country_name'=>'Republic of Korea',
            'iso'=>'KOR',
            'calling_code'=> 82
        ]);

        Country::create([
            'id'=>138,
            'country_name'=> 'Republic of Moldova',
            'iso'=>'MDA',
            'calling_code'=>373
        ]);


        Country::create([
            'id'=>139,
            'country_name'=>'Romania',
            'iso'=>'ROU',
            'calling_code'=> 40
        ]);


        Country::create([
            'id'=>140,
            'country_name'=>'Russian Federation',
            'iso'=> 'RUS',
            'calling_code'=> 7
        ]);


        Country::create([
            'id'=>141,
            'country_name'=>'Rwanda',
            'iso'=> 'RWA',
            'calling_code'=> 250
        ]);


        Country::create([
            'id'=>142,
            'country_name'=> 'Saint Kitts and Nevis',
            'iso'=>'KNA',
            'calling_code'=> 869
        ]);

        Country::create([
            'id'=>143,
            'country_name'=>'Saint Lucia',
            'iso'=>'LCA',
            'calling_code'=> 758
        ]);




        Country::create([
            'id'=>144,
            'country_name'=>'Saint Vincent and the Grenadines',
            'iso'=> 'VCT',
            'calling_code'=>784
        ]);


        Country::create([
            'id'=>145,
            'country_name'=>'Samoa',
            'iso'=> 'WSM',
            'calling_code'=>685
        ]);


        Country::create([
            'id'=>146,
            'country_name'=>'San Marino',
            'iso'=> 'SMR',
            'calling_code'=> 378
        ]);


        Country::create([
            'id'=>147,
            'country_name'=>'Sao Tome and Principe',
            'iso'=> 'STP',
            'calling_code'=> 239
        ]);


        Country::create([
            'id'=>148,
            'country_name'=>'Saudi Arabia',
            'iso'=>'SAU',
            'calling_code'=> 966
        ]);


        Country::create([
            'id'=>149,
            'country_name'=>'Senegal',
            'iso'=> 'SEN',
            'calling_code'=> 221
        ]);


        Country::create([
            'id'=>150,
            'country_name'=>'Serbia',
            'iso'=>'SRB',
            'calling_code'=> 381
        ]);


        Country::create([
            'id'=>151,
            'country_name'=>'Seychelles',
            'iso'=> 'SYC',
            'calling_code'=> 248
        ]);




        Country::create([
            'id'=>152,
            'country_name'=>'Sierra Leone',
            'iso'=> 'SLE',
            'calling_code'=> 232
        ]);


        Country::create([
            'id'=>153,
            'country_name'=>'Singapore',
            'iso'=> 'SGP',
            'calling_code'=> 65
        ]);


        Country::create([
            'id'=>154,
            'country_name'=>'Slovakia',
            'iso'=> 'SVK',
            'calling_code'=>421
        ]);

        Country::create([
            'id'=>155,
            'country_name'=>'Slovenia',
            'iso'=>'SVN',
            'calling_code'=> 386
        ]);



        Country::create([
            'id'=>156,
            'country_name'=>'Solomon Islands',
            'iso'=>'SLB',
            'calling_code'=> 677
        ]);

        Country::create([
            'id'=>157,
            'country_name'=> 'Somalia',
            'iso'=>'SOM',
            'calling_code'=> 252
        ]);



        Country::create([
            'id'=>158,
            'country_name'=>'South Africa',
            'iso'=>'ZAF',
            'calling_code'=> 27
        ]);

        Country::create([
            'id'=>159,
            'country_name'=>'South Sudan',
            'iso'=> 'SSD',
            'calling_code'=> 249
        ]);



        Country::create([
            'id'=>160,
            'country_name'=>'Spain',
            'iso'=> 'ESP',
            'calling_code'=> 34
        ]);

        Country::create([
            'id'=>161,
            'country_name'=> 'Sri Lanka',
            'iso'=>'LKA',
            'calling_code'=>94
        ]);


        Country::create([
            'id'=>162,
            'country_name'=> 'Sudan',
            'iso'=> 'SDN',
            'calling_code'=> 249
        ]);

        Country::create([
            'id'=>163,
            'country_name'=>'Suriname',
            'iso'=>'SUR',
            'calling_code'=>597
        ]);


        Country::create([
            'id'=>164,
            'country_name'=>'Swaziland',
            'iso'=> 'SWZ',
            'calling_code'=> 268
        ]);

        Country::create([
            'id'=>165,
            'country_name'=>'Sweden',
            'iso'=> 'SWE',
            'calling_code'=> 46
        ]);

        Country::create([
            'id'=>166,
            'country_name'=>'Switzerland',
            'iso'=> 'CHE',
            'calling_code'=> 41
        ]);



        Country::create([
            'id'=>167,
            'country_name'=>'Syrian Arab Republic',
            'iso'=> 'SYR',
            'calling_code'=> 963
        ]);

        Country::create([
            'id'=>168,
            'country_name'=>'Tajikistan',
            'iso'=>'TJK',
            'calling_code'=> 992
        ]);

        Country::create([
            'id'=>169,
            'country_name'=>'Thailand',
            'iso'=> 'THA',
            'calling_code'=> 66
        ]);


        Country::create([
            'id'=>170,
            'country_name'=>'Timor-Leste',
            'iso'=>'TLS',
            'calling_code'=> 670
        ]);


        Country::create([
            'id'=>171,
            'country_name'=> 'Togo',
            'iso'=>'TGO',
            'calling_code'=>  228
        ]);


        Country::create([
            'id'=>172,
            'country_name'=> 'Tokelau',
            'iso'=>'TKL',
            'calling_code'=>690
        ]);


        Country::create([
            'id'=>173,
            'country_name'=>'Tonga',
            'iso'=>'TON',
            'calling_code'=>676
        ]);


        Country::create([
            'id'=>174,
            'country_name'=>'Trinidad and Tobago',
            'iso'=>'TTO',
            'calling_code'=>868
        ]);




        Country::create([
            'id'=>175,
            'country_name'=>'Tunisia',
            'iso'=> 'TUN',
            'calling_code'=> 216
        ]);


        Country::create([
            'id'=>176,
            'country_name'=>'Turkey',
            'iso'=> 'TUR',
            'calling_code'=>90
        ]);


        Country::create([
            'id'=>177,
            'country_name'=>'Turkmenistan',
            'iso'=> 'TKM',
            'calling_code'=>993
        ]);



        Country::create([
            'id'=>178,
            'country_name'=>'Tuvalu',
            'iso'=>'TUV',
            'calling_code'=>688
        ]);


        Country::create([
            'id'=>179,
            'country_name'=> 'Uganda',
            'iso'=>'UGA',
            'calling_code'=>256
        ]);


        Country::create([
            'id'=>180,
            'country_name'=>'Ukraine',
            'iso'=>'UKR',
            'calling_code'=> 380
        ]);


        Country::create([
            'id'=>181,
            'country_name'=>' United Arab Emirates',
            'iso'=>'ARE',
            'calling_code'=> 971
        ]);


        Country::create([
            'id'=>182,
            'country_name'=>'United Kingdom',
            'iso'=>'GBR',
            'calling_code'=> 44
        ]);


        Country::create([
            'id'=>183,
            'country_name'=>'Tanzania',
            'iso'=> 'TZA',
            'calling_code'=>255
        ]);


        Country::create([
            'id'=>184,
            'country_name'=>'United States of America',
            'iso'=>'USA',
            'calling_code'=> 1
        ]);


        Country::create([
            'id'=>185,
            'country_name'=>'Uruguay',
            'iso'=>'URY',
            'calling_code'=> 598
        ]);


        Country::create([
            'id'=>186,
            'country_name'=>'Uzbekistan',
            'iso'=> 'UZB',
            'calling_code'=> 998
        ]);

        Country::create([
            'id'=>187,
            'country_name'=>'Vanuatu',
            'iso'=> 'VUT',
            'calling_code'=>678
        ]);


        Country::create([
            'id'=>188,
            'country_name'=> 'Venezuela',
            'iso'=>'VEN',
            'calling_code'=>58
        ]);


        Country::create([
            'id'=>189,
            'country_name'=> 'Viet Nam',
            'iso'=>'VNM',
            'calling_code'=>84
        ]);

        Country::create([
            'id'=>190,
            'country_name'=>'Yemen',
            'iso'=>'YEM',
            'calling_code'=>967
        ]);


        Country::create([
            'id'=>191,
            'country_name'=>'Zambia',
            'iso'=> 'ZMB',
            'calling_code'=>260
        ]);

        Country::create([
            'id'=>192,
            'country_name'=>'Zimbabwe',
            'iso'=>'ZWE',
            'calling_code'=>263
        ]);


    }
}
