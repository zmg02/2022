<div class="modal fade" id="editMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Edit</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('menu.update',[]) }}" method="post">
                @csrf
                <div class="form-body">
                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Parent</span></div>
                    <div class="col-md-9">
                      <input type="hidden" id="_id" name="id">
                      <input type="hidden" name="parent_id" class="parent @error('parent_id') is-invalid @enderror">
                      <div class="nav">
                        <p class="set">Parent</p>
                        <ul class="new">
                          <li class="dd-item dd3-item" data-id="0"><div class="dd3-content">Root</div></li>
                          <?php echo $menusHtml;?>
                        </ul>
                      </div>
                      @error('parent_id')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Title</span></div>
                    <div class="col-md-9">
                      <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title">
                      @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Icon</span></div>
                    <div class="col-md-9">
                      <input type="hidden" id="icon" name="icon">
                      <div class="nav">
                        <div class="row">
                          <div class="col-md-1">
                            <p class="p-input icon" style="width: 38px;height: 38px">
                              <i class="mdi"></i>
                            </p>
                          </div>
                          <div class="col-md-11">
                            <p class="p-input setIcon">Icon</p>

                            <div class="Icons">
                              @foreach($icons as $icon)
                                <a role="button" href="#" class="iconpicker-item" title="{{ $icon }}"><i class="mdi {{ $icon }}"></i></a>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>URI</span></div>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="uri" placeholder="URI">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Order</span></div>
                    <div class="col-md-9">
                      <input class="form-control" type="number" name="order" placeholder="Order" value="0">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Roles</span></div>
                    <div class="col-md-9">
                      <select class="form-control"  style="height: 38px" name="roles_id" size="1">
                        <option value="1">Admin</option>
                        <option value="2">zmg</option>
                        <option value="3">test3</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2 control-label"><span>Permission</span></div>
                    <div class="col-md-9">
                      <div class="input-group">
                        <input type="hidden" name="permissions[]">
                        <div class="tree">
                          <div class="d-flex">
                            <label class="lyear-checkbox checkbox-inline checkbox-primary">
                              <input type="checkbox"><span>Select All</span>
                            </label>

                            <label class="lyear-checkbox checkbox-inline checkbox-primary">
                              <input type="checkbox"><span>Expand</span>
                            </label>
                          </div>
                          <div class="dd-tree">
                            <ul>
                              <li>aaaa</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>

                <div class="form-footer row">
                  <div class="col-md-2">&nbsp;</div>
                  <div class="col-md-9">
                    <input type="hidden" name="submit">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button class="btn btn-primary btn-w-md" type="submit">提 交</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>