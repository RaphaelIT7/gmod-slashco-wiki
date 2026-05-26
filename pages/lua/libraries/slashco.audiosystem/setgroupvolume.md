<function name="SetGroupVolume" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Fades the given group of sounds to the given volume over the specified time<br>
		<unused></unused>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="groupName" type="string">The sound identifier</arg>
		<arg name="groupVolume" type="number">The target volume to fade to</arg>
		<arg name="lerpTime" type="number">How many seconds it takes for it to fade to the target volume</arg>
		<arg name="sendToEntity" type="table|Entity">
			The Player or table of players to send this to.
			<note>
				This argument only works serverside!
			</note>
		</arg>
	</args>
</function>