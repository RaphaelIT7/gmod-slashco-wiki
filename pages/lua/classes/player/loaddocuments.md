<function name="LoadDocuments" parent="Player" type="classfunc">
	<description>
		Loads the player's collected documents from the `slashco_documents` database table.<br>
		Duplicate rows for the same document are collapsed into a single entry using the highest rating found. Networks the loaded documents to the player afterwards. Called automatically on `PlayerInitialSpawn`.
	</description>
	<realm>Server</realm>
	<group>Documents</group>
</function>
