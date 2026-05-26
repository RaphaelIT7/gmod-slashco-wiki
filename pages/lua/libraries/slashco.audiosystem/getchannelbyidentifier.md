<function name="GetChannelByIdentifier" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Finds the channel matching the given identifier and entity index.<br>
		This will skip channels that have not yet been created or have been marked for destruction.<br>
		<internal></internal>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="identifier" type="string">The identifier to search for</arg>
		<arg name="entIndex" type="number">The <link url="https://wiki.facepunch.com/gmod/Entity:EntIndex">Entity:EntIndex</link> to search for</arg>
	</args>
	<rets>
		<ret name="channel" type="IGModAudioChannel">The found channel or `nil` on failure</ret>
	</rets>
</function>