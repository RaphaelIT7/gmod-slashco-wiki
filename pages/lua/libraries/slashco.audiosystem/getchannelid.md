<function name="GetChannelID" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the unique ChannelID for the given channel.<br>
		This will only work on channels created by <page>SlashCo.AudioSystem.CreateChannel</page>
		<internal></internal>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel"></arg>
	</args>
	<rets>
		<ret name="channelID" type="number"></ret>
	</rets>
</function>