<function name="PrecacheSound" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Precaches a sound that can then be played using the given identifier
		<note>
			This function currently does nothing serverside.
		</note>
		<warning>
			This function may be changed in the future due to the following ToDo:<br>
			`ToDo: Switch this function over to use PlaySound instead of implementing the logic itself again.`<br>
		</warning>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="soundFile" type="string">The soundFile to play</arg>
		<arg name="mode" type="string">The mode's to use, can be any of the flags from <link url=https://wiki.facepunch.com/gmod/sound.PlayURL>sound.PlayURL</link></arg>
		<arg name="identifier" type="string">The identifier to use for this sound</arg>
		<arg name="callback" type="function">The callback function after creation
			<callback>
				<arg name="channel" type="IGModAudioChannel">The created channel</arg>
			</callback>
		</arg>
	</args>
</function>