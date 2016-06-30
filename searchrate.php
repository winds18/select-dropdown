<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fellowtrucker Search Rate</title>
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/select2.min.css" media="all">
    <link rel="stylesheet" href="../css/searchrate.css">
</head>
<body>
    <pre>
    <?php var_dump($_POST);?>
    </pre>
    <div class="nav">
        <ul>
            <li>&nbsp;FellowTrucker</li>
        </ul>
    </div>
    <div class="subnav">
        <ul>
            <li><a href="/">Home</a></li>
            <li id="search_rate"><a href="/searchrate">Search Rate</a></li>
            <li><a href="/postrate">Post Rate</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/logout">Log out</a></li>
        </ul>
    </div>
    <div class="buffer">
    </div>
    <div class="form_register">
        <form action="" method="post" id="searchrate">
            <center>
                <table id="form_table">
                    <tr><td>&nbsp;</td></tr>
                    <tr><td colspan=2 align=center><h3>Search Rate</h3></td></tr>
                    <tr><td colspan="2" id="message" align="center">&nbsp;</td></tr>
                    <tr>
                        <td align=right><label for="trailer_type">Trailer type</label></td>
                        <td align=left>
                            <dl class="dropdown">
                                <dt><a href="javascript:void(0);"><span class="hida">Please Select</span><p class="multiSel"></p></a></dt>
                                <dd>
                                    <div class="mutliSelect">
                                        <ul>
                                            <li class="options"><span class="selectall">select all</span><span class="cleanall">clear all</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="N" value="N">Conestoga<span>N</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="C" value="C">Containers<span>C</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="K" value="K">Decks, Specialized<span>K</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="D" value="D">Decks, Standard<span>D</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="B" value="B">Dry Bulk<span>B</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="F" value="F">Flatbeds<span>F</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="Z" value="Z">Hazardous Materials<span>Z</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="O" value="O">Other Equipments<span>O</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="R" value="R">Reefers<span>R</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="T" value="T">Tankers<span>T</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="S" value="S">Vans Specialized<span>S</span></li>
                                            <li><input id="" type="checkbox" name="trailer_type[]" data-show="V" value="V">Vans Standard<span>V</span></li>
                                        </ul>
                                    </div>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <td align=right><label for="origin_state">Origin state</label></td>
                        <td align=left>
                            <select class="form-control customStyle" id="origin_state" name="origin_state">
                                <option value="" selected>Please select</option>
                                <option value='AL'>Alabama</option>
                                <option value='AK'>Alaska</option>
                                <option value='AZ'>Arizona</option>
                                <option value='AR'>Arkansas</option>
                                <option value='CA'>California</option>
                                <option value='CO'>Colorado</option>
                                <option value='CT'>Connecticut</option>
                                <option value='DE'>Delaware</option>
                                <option value='DC'>District of Columbia</option>
                                <option value='FL'>Florida</option>
                                <option value='GA'>Georgia</option>
                                <option value='HI'>Hawaii</option>
                                <option value='ID'>Idaho</option>
                                <option value='IL'>Illinois</option>
                                <option value='IN'>Indiana</option>
                                <option value='IA'>Iowa</option>
                                <option value='KS'>Kansas</option>
                                <option value='KY'>Kentucky</option>
                                <option value='LA'>Louisiana</option>
                                <option value='ME'>Maine</option>
                                <option value='MD'>Maryland</option>
                                <option value='MA'>Massachusetts</option>
                                <option value='MI'>Michigan</option>
                                <option value='MN'>Minnesota</option>
                                <option value='MS'>Mississippi</option>
                                <option value='MO'>Missouri</option>
                                <option value='MT'>Montana</option>
                                <option value='NE'>Nebraska</option>
                                <option value='NV'>Nevada</option>
                                <option value='NH'>New Hampshire</option>
                                <option value='NJ'>New Jersey</option>
                                <option value='NM'>New Mexico</option>
                                <option value='NY'>New York</option>
                                <option value='NC'>North Carolina</option>
                                <option value='ND'>North Dakota</option>
                                <option value='OH'>Ohio</option>
                                <option value='OK'>Oklahoma</option>
                                <option value='OR'>Oregon</option>
                                <option value='PA'>Pennsylvania</option>
                                <option value='RI'>Rhode Island</option>
                                <option value='SC'>South Carolina</option>
                                <option value='SD'>South Dakota</option>
                                <option value='TN'>Tennessee</option>
                                <option value='TX'>Texas</option>
                                <option value='UT'>Utah</option>
                                <option value='VT'>Vermont</option>
                                <option value='VA'>Virginia</option>
                                <option value='WA'>Washington</option>
                                <option value='WV'>West Virginia</option>
                                <option value='WI'>Wisconsin</option>
                                <option value='WY'>Wyoming</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align=right><label for="origin_city">Origin city</label></td>
                        <td align=left>
                            <select class="form-control customStyle" name="origin_city" id="origin_city" disabled>
                                <optgroup>
                                    <option value="" selected style="font-family: arial, helvetica, sans-serif; font-size: 13px;">Please Select</option>
                                </optgroup>
                            </select>
                            <input type="hidden" name="origin_city_name" value="Please Select">
                        </td>
                    </tr>
                    <tr>
                        <td align=right><label for="origin_zipcode">(or origin zip code)</label></td>
                        <td align=left><input class="input-control" type="text" name="origin_zipcode" id="origin_zipcode" placeholder="optional" size="6"></td>
                    </tr>
                    <tr>
                        <td align=right><label for="origin_radius">Radius</label></td>
                        <td align=left><input type="text" class="input-control" name="origin_radius" id="origin_radius" placeholder="radius" size="6"></td>
                    </tr>
                    <tr>
                        <td align=right><label for="dest_state">Destination State</label></td>
                        <td align=left>
                            <select class="form-control customStyle" id="dest_state" name="dest_state">
                                <option value="">Please Select</option>
                                <option value='AL'>Alabama</option>
                                <option value='AK'>Alaska</option>
                                <option value='AZ'>Arizona</option>
                                <option value='AR'>Arkansas</option>
                                <option value='CA'>California</option>
                                <option value='CO'>Colorado</option>
                                <option value='CT'>Connecticut</option>
                                <option value='DE'>Delaware</option>
                                <option value='DC'>District of Columbia</option>
                                <option value='FL'>Florida</option>
                                <option value='GA'>Georgia</option>
                                <option value='HI'>Hawaii</option>
                                <option value='ID'>Idaho</option>
                                <option value='IL'>Illinois</option>
                                <option value='IN'>Indiana</option>
                                <option value='IA'>Iowa</option>
                                <option value='KS'>Kansas</option>
                                <option value='KY'>Kentucky</option>
                                <option value='LA'>Louisiana</option>
                                <option value='ME'>Maine</option>
                                <option value='MD'>Maryland</option>
                                <option value='MA'>Massachusetts</option>
                                <option value='MI'>Michigan</option>
                                <option value='MN'>Minnesota</option>
                                <option value='MS'>Mississippi</option>
                                <option value='MO'>Missouri</option>
                                <option value='MT'>Montana</option>
                                <option value='NE'>Nebraska</option>
                                <option value='NV'>Nevada</option>
                                <option value='NH'>New Hampshire</option>
                                <option value='NJ'>New Jersey</option>
                                <option value='NM'>New Mexico</option>
                                <option value='NY'>New York</option>
                                <option value='NC'>North Carolina</option>
                                <option value='ND'>North Dakota</option>
                                <option value='OH'>Ohio</option>
                                <option value='OK'>Oklahoma</option>
                                <option value='OR'>Oregon</option>
                                <option value='PA'>Pennsylvania</option>
                                <option value='RI'>Rhode Island</option>
                                <option value='SC'>South Carolina</option>
                                <option value='SD'>South Dakota</option>
                                <option value='TN'>Tennessee</option>
                                <option value='TX'>Texas</option>
                                <option value='UT'>Utah</option>
                                <option value='VT'>Vermont</option>
                                <option value='VA'>Virginia</option>
                                <option value='WA'>Washington</option>
                                <option value='WV'>West Virginia</option>
                                <option value='WI'>Wisconsin</option>
                                <option value='WY'>Wyoming</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align=right><label for="dest_city">Destination City</label></td>
                        <td align=left><select class="form-control customStyle" name="dest_city" id="dest_city" disabled><option value="">Please Select</option></select></td>
                    </tr>
                    <tr>
                        <td align=right><label for="dest_zipcode">(or destination zip code)</label></td>
                        <td align=left><input type="text" class="input-control" name="dest_zipcode" id="dest_zipcode" placeholder="optional" size="6"></td>
                    </tr>
                    <tr>
                        <td align=right><label for="dest_radius">Radius</label></td>
                        <td align=left><input type="text" class="input-control" name="dest_radius" id="dest_radius" placeholder="radius" size="6"></td>
                    </tr>
                    <tr>
                        <td align=right><label for="load_type">Load Type</label></td>
                        <td align=left>
                            <div class="styled-select">
                                <select class="form-control" name="load_type">
                                    <option value="F" selected>Full Load</option>
                                    <option value="P">Partial Load</option>
                                    <option value="B">Both</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input type="submit" value="Search" class="styled-button-8"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
    <script type="text/javascript" src="../scripts/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../scripts/jquery-ui.min.js"></script>
    <script src="../scripts/select2.full.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('form').submit(function(e){
                var data = $('select,input[type="text"]').serializeArray();
                var tariler_type = $('p.multiSel').text();
                if(tariler_type.length){
                    var origin = {},dest = {};
                    for(var i in data){
                        if(data[i].name == 'origin_state'){
                            origin.state = data[i].value;
                            if(!origin.state.length) origin.city = '';
                        }else if(data[i].name == 'dest_state'){
                            dest.state = data[i].value;
                            if(!dest.state.length) dest.city = '';
                        }else if(data[i].name == 'origin_city'){
                            origin.city = new RegExp('please','i').test(data[i].value) ? '' : data[i].value;
                        }else if(data[i].name == 'dest_city'){
                            dest.city = new RegExp('please','i').test(data[i].value) ? '' : data[i].value;
                        }else if(data[i].name == 'origin_radius'){
                            origin.radius = new RegExp('^[0-9]*$').test(data[i].value) ? data[i].value : '';
                            $('#origin_radius').val(origin.radius);
                        }else if(data[i].name == 'dest_radius'){
                            dest.radius = new RegExp('^[0-9]*$').test(data[i].value) ? data[i].value : '';
                            $('#dest_radius').val(dest.radius);
                        }
                    }
                    if(!((origin.state.length && origin.city.length) || (dest.state.length && dest.city.length))){
                        alert('Please fill in origin or destination.');
                        return false;
                    }
                    //console.log(origin,dest);
                    return true;
                }else{
                    alert('Please select trailer type.');
                    return false;
                }
            });
            function matchStart(term, text){
                if (text.toUpperCase().indexOf(term.toUpperCase()) == 0){
                    return true;
                }
                return false;
            }
            $.fn.select2.amd.require(['select2/compat/matcher'],function(oldMatcher){
                $("#origin_state,#origin_city,#dest_state,#dest_city").select2({matcher: oldMatcher(matchStart)});
                $("#origin_state,#dest_state").on("select2:close", function(e){
                    var id = $(this).attr('id').replace('state', 'city');
                    var obj = $("#" + id);
                    obj.load("getCities.php",{"state": $(this).val()}, function(data){
                        data = '<option val="">Please Select</option>' + data;
                        $(this).html(data).prop('disabled',false).select2({matcher: oldMatcher(matchStart)});
                    });
                });
                $("#origin_city,#dest_city").on("select2:close", function(e){
                    var id = 'input[name="' + $(this).attr('id') + '_name"]';
                    $(id).val($(this).find("option:selected").text());console.log(id);
                });
            });
            $("#pickup_date").datepicker();
            $("#deliver_date").datepicker();
            $("#book_date").datepicker();
            $(".dropdown dt a").on('click', function(){
                $(".dropdown dd ul").slideToggle('fast');
            });
            $(".dropdown dd ul li a").on('click', function(){
                $(".dropdown dd ul").hide();
            });
            $(".dropdown dd ul li.options span").on('click', function(){
                var cls = $(this)[0].className;
                if (cls == "cleanall"){
                    $(':checkbox').prop('checked', false);
                    $('.multiSel').empty();
                    $(".hida").show();
                }else{
                    $(':checkbox').prop('checked', true);
                    var html = '';
                    $(".hida").hide();
                    $(':checkbox').each(function(index){
                        var title = $(this).attr('data-show');
                        if (!index)
                            var sp = '';
                        else
                            var sp = ',';
                        html = '<span title="' + title + '">' + sp + title + '</span>';
                        $('.multiSel span[title="' + title + '"]').remove();
                        $('.multiSel').append(html);
                    });
                }
            });
            function getSelectedValue(id){return $("#" + id).find("dt a span.value").html();}
            $(document).bind('click', function(e){
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });
            $('.mutliSelect input[type="checkbox"]').on('click',function(){
                var obj = '';
                var title = $(this).attr('data-show'),
                    value = $(this).val();
                if ($(this).is(':checked')){
                    var html = '<span title="' + title + '">,' + title + '</span>';
                    $('.multiSel').append(html);
                    $(".hida").hide();
                    obj = $('.multiSel span:eq(0)');
                }else{
                    $('span[title="' + title + '"]').remove();
                    if ($('.multiSel span').length)
                        var ret = $(".hida").hide();
                    else
                        var ret = $(".hida").show();
                        $('.dropdown dt a').append(ret);
                        obj = $('.multiSel span:eq(0)');
                    }
                if (obj.length){
                    obj.html(obj.html().replace(',', ''));
                }
            });
        });
    </script>
</body>
</html>
