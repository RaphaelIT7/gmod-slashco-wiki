<function name="GetEntityChannels" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns all channels that were parented to the given entity.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="entity" type="number|Entity">Entity or entIndex to search with</arg>
	</args>
	<rets>
		<ret name="channels" type="table<IGModAudioChannel>">A table containing all found channels</ret>
	</rets>
</function>