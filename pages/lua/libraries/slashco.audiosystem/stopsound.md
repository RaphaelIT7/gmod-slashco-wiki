<function name="StopSound" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Stops the sound matching the given information
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="identifier" type="string">The sound identifier</arg>
		<arg name="fadeOut" type="number" default="0">How many seconds it takes for it to fade out</arg>
		<arg name="entity" type="Entity">The entity the sound is playing on</arg>
		<arg name="sendToEntity" type="table|Entity">
			The player or table of players to stop the sounds for
			<note>
				This argument only works serverside!
			</note>
		</arg>
	</args>
</function>