<function name="CreateDocument" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns a document at the specified position and angle.<br>
		Returns `nil` if the document entity could not be created.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the document should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the document should be spawned with.</arg>
	</args>
	<rets>
		<ret name="ent" type="Entity">The created document entity, or nil``  if creation failed.</ret>
	</rets>
</function>