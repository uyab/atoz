@extends('layouts.backend')

@section('content')

    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="#" class="form form-horizontal" role="form">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Standard Form</h3>
                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Input</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Disabled</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="inputEmail1" placeholder="Email" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label">Prefix and Suffix</label>
                                    <div class="input-group col-md-10">
                                        <span class="input-group-addon">http://</span>
                                        <input type="text" class="form-control" placeholder="yoursite">
                                        <span class="input-group-addon">.com</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Multiple Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control" multiple="multiple">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Textarea</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="3"></textarea>
                                        <p class="help-block">Helper text, used for guidelines.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Checkbox</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that&mdash;be sure to include why it's great
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that&mdash;be sure to include why it's great
                                          </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Checkbox Inline</label>
                                    <div class="col-md-10">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Radio</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                          <label>
                                            <input type="radio" value="" name="radio1">
                                            Option one is this and that&mdash;be sure to include why it's great
                                          </label>
                                        </div>
                                        <div class="radio">
                                          <label>
                                            <input type="radio" value="" name="radio1">
                                            Option one is this and that&mdash;be sure to include why it's great
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Radio Inline</label>
                                    <div class="col-md-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineCheckbox" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineCheckbox" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineCheckbox" value="option3"> 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">File</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a class="btn" href="#cancel">Cancel</a>
                            </div>
                        </div>
                    </form>

                    <div class="pad"></div>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inline Form</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <label class="sr-only">Author</label>
                                    <input type="text" class="form-control" placeholder="Type Author...">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Title</label>
                                    <input type="text" class="form-control" placeholder="Type Title...">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Category</label>
                                    <select class="form-control">
                                        <option>Novel</option>
                                        <option>Drama</option>
                                        <option>Romance</option>
                                        <option>Thriller</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <form action="#" class="form" role="form">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vertical Form</h3>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="inputEmail1" class="control-label">Input</label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Disabled</label>
                                <input type="email" class="form-control" placeholder="Disabled" disabled="disabled">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prefix and Suffix</label>
                                <div class="input-group">
                                    <span class="input-group-addon">http://</span>
                                    <input type="text" class="form-control" placeholder="yoursite">
                                    <span class="input-group-addon">.com</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select</label>
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Multiple Select</label>
                                <select class="form-control" multiple="multiple">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Textarea</label>
                                <textarea class="form-control" rows="3"></textarea>
                                <p class="help-block">Helper text, used for guidelines.</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Checkbox</label>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="">
                                    Option one is this and that&mdash;be sure to include why it's great
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="">
                                    Option one is this and that&mdash;be sure to include why it's great
                                  </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Checkbox Inline</label>
                                <div class="">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Radio</label>
                                <div class="">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" value="" name="radio1">
                                        Option one is this and that&mdash;be sure to include why it's great
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" value="" name="radio1">
                                        Option one is this and that&mdash;be sure to include why it's great
                                      </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Radio Inline</label>
                                <div class="">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineCheckbox" value="option1"> 1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineCheckbox" value="option2"> 2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineCheckbox" value="option3"> 3
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">File</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <a class="btn" href="#cancel">Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop