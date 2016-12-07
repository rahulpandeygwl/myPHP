how the form for editing the specified resource.
         * GET /credentials/{id}/edit
         *
         * @param  int  $id
         * @return Response
         */
        public function edit($id)
        {
                //
        }

        /**
         * Update the specified resource in storage.
         * PUT /credentials/{id}
         *
         * @param  int  $id
         * @return Response
         */
        public function update($id)
        {
                //
        }

        /**
         * Remove the specified resource from storage.
         * DELETE /credentials/{id}
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy($id)
        {
                        Credential::find($id)->delete();
        }

}
                             
