<function name="SetChannelIdentifier" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Sets the new identifier for the given channel.<br>
		This will only work on channels created by <page>SlashCo.AudioSystem.CreateChannel</page>
		<internal></internal>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel"></arg>
		<arg name="identifier" type="string">The new identifier</arg>
	</args>
</function>