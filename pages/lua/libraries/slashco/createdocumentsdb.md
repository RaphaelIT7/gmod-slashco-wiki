<function name="CreateDocumentsDB" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Creates the `slashco_documents` SQLite table used to persist players' collected documents, if it doesn't already exist.<br>
		Notifies all connected players in chat when the table has to be created. Called automatically on startup.
	</description>
	<realm>Server</realm>
	<group>Documents</group>
</function>
